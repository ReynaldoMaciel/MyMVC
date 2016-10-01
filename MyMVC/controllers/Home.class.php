<?php

class Home extends Controller{

    function __construct() {
        parent::__construct("RM php Framework","Framework MyMVC, simples e prático","Template","Model");
    }
    
    public function index() {
        $this->renderView("index");
    }
}
