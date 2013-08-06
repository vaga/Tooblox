<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class ColorPicker extends AbstractTool {

    function __construct() {

		$this->set('_title', 'Color Picker');
        $this->set('_description', 'A simple color picker from jsColor.');
        $this->set('_keywords', 'color, picker, js');
        $this->set('_author', '');
    }

    function handlePost($req) {

    }

    function handleGet($req) {

    }
}
