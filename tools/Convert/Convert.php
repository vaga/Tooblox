<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Convert extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Convert');
        $this->set('_description', 'Convertion tool : hexadecimal, decimal, binary and others.');
        $this->set('_keywords', 'convert, hexadecimal, decimal, binary, octal, convertion');
        $this->set('_author', 'Etienne Bondot');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
