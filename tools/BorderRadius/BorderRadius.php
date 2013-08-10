<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class BorderRadius extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Border Radius');
        $this->set('_description', 'Some help to make a good border radius.');
        $this->set('_keywords', 'border, radius, css, style');
        $this->set('_author', 'Etienne Bondot');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
