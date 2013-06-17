<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Timestamp extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Timestamp');
        $this->set('_description', 'Print the timestamp since Epoch.');
        $this->set('_keywords', 'timestamp, epoch, time, date');
        $this->set('_author', 'Etienne BONDOT');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
