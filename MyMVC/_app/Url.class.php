<?php

class Url {    
    
    public function __construct() {
        $this->getText();
    }    
    
    public function asArray(){
        return explode("/",$this->getText());
    }  
    
    public function getText() {
        return strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
    }
}
