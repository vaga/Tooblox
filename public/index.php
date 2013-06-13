<?php

// Router
$uri = str_replace('/', '', $_SERVER['REQUEST_URI']);
$get = strpos($uri, '?');
$uri = substr($uri, 0, ($get !== false) ? $get : strlen($uri));

// Tool
$tools = include('../configs/tools.php');
$toolName = ($uri != '') ? $tools[$uri] : 'Home';
$toolName = str_replace(' ', '', (in_array($toolName, $tools)) ? $toolName : 'Not Found');

require_once '../tools/' . $toolName . '/' . $toolName . '.php';

$toolClass = "Tool\\" . $toolName;
$tool = new $toolClass();
$tool->set('tools', $tools);

// Let's gooo !
if (!empty($_POST))
    $tool->handlePost($_POST);
else {
    $tool->handleGet($_GET);
    $tool->render('../tools/' . $toolName . '/view.phtml');
}

