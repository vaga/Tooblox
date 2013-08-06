<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class VigenereCipher extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Vigenere Cipher');
        $this->set('_description', 'Vigenere code and decode tool.');
        $this->set('_keywords', 'vigenere, cipher, code, decode, tool');
        $this->set('_author', 'Etienne Bondot');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
