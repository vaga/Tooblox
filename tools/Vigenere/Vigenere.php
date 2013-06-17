<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Vigenere extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Vigenere');
        $this->set('_description', 'Vigenere code and decode tool.');
        $this->set('_keywords', 'vigenere, code, decode, tool');
        $this->set('_author', 'Etienne BONDOT');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
