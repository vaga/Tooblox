<?php

namespace Tool;

require_once '../tools/AbstractTool.php';

class Home extends AbstractTool {

    function __construct() {

        $this->set('_title', 'Home');
        $this->set('_description', 'Tooblox is all you need...');
        $this->set('_keywords', 'tools, box, hack, developper');
        $this->set('_author', 'Etienne Bondot, Fabien Casters');
    }

    function handlePost($req) {

        $tool = $req['tool'];
        $slug = array_search($tool, $this->get('tools'));
        if ($slug != false)
            header('Location: ./' . $slug);
        else
            header('Location: ./not-found');
    }

    function handleGet($req) {

    }
}
