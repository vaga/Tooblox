<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Random extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Random');
        $this->set('_description', 'A simple and real random generator.');
        $this->set('_keywords', 'random, generator, integer');
        $this->set('_author', 'Etienne Bondot');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
