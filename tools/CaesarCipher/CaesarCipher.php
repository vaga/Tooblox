<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class CaesarCipher extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Caesar Cipher');
        $this->set('_description', 'Cesare code and decode tool.');
        $this->set('_keywords', 'caesar, cipher, encode, decode, tool');
        $this->set('_author', 'Fabien Casters');
    }

    function handlePost($req) {

    }

    function handleGet($req) {
    }
}
