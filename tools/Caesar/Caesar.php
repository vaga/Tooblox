<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Caesar extends AbstractTool {

    function __construct() {

		$this->set('_title', 'Cesar');
        $this->set('_description', 'Cesare code and decode tool.');
        $this->set('_keywords', 'cesare, encode, decode, tool');
        $this->set('_author', 'Fabien Caster');
    }

    function handlePost($req) {

    }

    function handleGet($req) {
    }
}
