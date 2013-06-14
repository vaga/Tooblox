<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Date extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Date');
        $this->set('_description', 'Print the current date and time for multi timezone.');
        $this->set('_keywords', 'world, clock, timezone, hour');
        $this->set('_author', 'Etienne BONDOT');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
