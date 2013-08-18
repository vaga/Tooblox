<?php
    function uploadImageFile() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $iJpgQuality = 90;

            if ($_FILES) {
                // if no errors and size less than 250kb
                $image_info = getimagesize($_FILES["image_file"]["tmp_name"]);
                $iWidth = $image_info[0];
                $iHeight = $image_info[1];
                if (! $_FILES['image_file']['error'] && $_FILES['image_file']['size'] < 250 * 1024) {
                    if (is_uploaded_file($_FILES['image_file']['tmp_name'])) {

                        // new unique filename
                        $sTempFileName = 'cache/' . md5(time().rand());
                        // move uploaded file into cache folder
                        move_uploaded_file($_FILES['image_file']['tmp_name'], $sTempFileName);
                        // change file permission to 644
                        @chmod($sTempFileName, 0644);
                        if (file_exists($sTempFileName) && filesize($sTempFileName) > 0) {
                            $aSize = getimagesize($sTempFileName); // try to obtain image info
                            if (!$aSize) {
                                @unlink($sTempFileName);
                                return;
                            }
                            // check for image type
                            switch($aSize[2]) {
                                case IMAGETYPE_JPEG:
                                    $sExt = '.jpg';
                                    // create a new image from file
                                    $vImg = @imagecreatefromjpeg($sTempFileName);
                                    break;
                                case IMAGETYPE_PNG:
                                    $sExt = '.png';
                                    // create a new image from file
                                    $vImg = @imagecreatefrompng($sTempFileName);
                                    break;
                                default:
                                    @unlink($sTempFileName);
                                    return;
                            }

                            $vDstImg = @imagecreatetruecolor( $iWidth, $iHeight );
                            imagecopyresampled($vDstImg, $vImg, 0, 0, (int)$_POST['x1'], (int)$_POST['y1'], $iWidth, $iHeight, (int)$_POST['w'], (int)$_POST['h']);
                            $sResultFileName = $sTempFileName . $sExt;
                            imagejpeg($vDstImg, $sResultFileName, $iJpgQuality);
                            @unlink($sTempFileName);

                            return $sResultFileName;
                        }
                    }
                }
            }
        }
    }

    $sImage = uploadImageFile();
    if(file_exists($sImage)){
        header('Content-Type: application/force-download');
        header('Content-Disposition: attachment; filename='.basename($sImage));
        readfile($sImage);
        unlink($sImage);
    }
?>