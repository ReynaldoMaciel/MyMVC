<?php

class MVC extends Controller{

    function __construct() {
        parent::__construct("O que é MVC","O que é mvc segundo a wikipedia","Template","Model");
    }
    
    public function index() {
        $this->renderView("index");
    }
}
