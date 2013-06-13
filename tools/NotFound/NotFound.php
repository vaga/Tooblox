<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class NotFound extends AbstractTool {

    function __construct() {

    }

    function handlePost($req) {

        $tool = trim(strtolower($req['tool']));
        if (in_array($tool, $this->get('tools')))
            header('Location: ./' . $tool);
        else
            header('Location: ./notfound');
    }

    function handleGet($req) {

    }
}

