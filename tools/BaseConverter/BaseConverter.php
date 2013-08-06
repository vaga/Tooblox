<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class BaseConverter extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Base Converter');
        $this->set('_description', 'Convertion tool : hexadecimal, decimal, binary and others.');
        $this->set('_keywords', 'convert, hexadecimal, decimal, binary, octal, convertion');
        $this->set('_author', 'Etienne Bondot');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
