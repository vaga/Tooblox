<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class MyIP extends AbstractTool {

    function __construct() {

        $this->set('_title', 'IP');
        $this->set('_description', 'Find you IP.');
        $this->set('_keywords', 'ip, find');
        $this->set('_author', 'Etienne BONDOT');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
