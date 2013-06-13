<?php

namespace Tool;

abstract class AbstractTool {

    protected $_values = array();

    function __construct() {

    }

    function set($key, $value) {

        $this->_values[$key] = $value;
    }

    function get($key, $default = '') {

        return (isset($this->_values[$key])) ? $this->_values[$key] : $default;
    }

    function render($path) {
        
        require_once '../template/header.phtml';
        require_once $path;
        require_once '../template/footer.phtml';
    }

    abstract function handlePost($req);
    abstract function handleGet($req);
}
