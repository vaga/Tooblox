<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class ImageCrop extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Image Crop');
        $this->set('_description', 'Remove of the outer parts of an image to improve framing, accentuate subject matter or change aspect ratio.');
        $this->set('_keywords', 'image, crop, resize, tool');
        $this->set('_author', 'Etienne Bondot');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
