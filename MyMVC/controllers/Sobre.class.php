<?php

class Sobre extends Controller{

    function __construct() {
        parent::__construct("Sobre","O FRAMEWORK","Template","Model");
    }
    
    public function index() {
        $this->renderView("index");
    }
}