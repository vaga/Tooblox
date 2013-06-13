<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class __Gen__ extends AbstractTool {

    function __construct() {

        $this->set('_title', '');
        $this->set('_description', '');
        $this->set('_keywords', '');
        $this->set('_author', '');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
