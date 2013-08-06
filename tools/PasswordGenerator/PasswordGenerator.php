<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class PasswordGenerator extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Password Generator');
        $this->set('_description', 'Generate your password');
        $this->set('_keywords', 'generator, password, security');
        $this->set('_author', 'Fabien Casters');
    }

    function handlePost($req) {
    }

    function handleGet($req) {
    }
}
