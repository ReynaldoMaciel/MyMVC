<?php

class Page {
    private $Title ;
    private $Description;
    protected $Url;
    private $Template;/*AINDA NÃO IMPLEMENTADO*/
    private $Model;/*PODE SER QUALQUER OBJETO, DESDE STRING ATÉ VETOR DE OBJETOS INSTACIADOS DE CLASSES*/
    
    public function __construct($titulo, $descricao, $template, $model) {
        $this->setTitle($titulo);
        $this->setDescription($descricao);
        $this->Url = $this->getUrl();
        $this->setTemplate($template);
        $this->setModel($model);
    }
    
    public function getUrl(){
        $aux = new Url;
        return $aux->asArray();
    }  
    public function setTitle($param) {
        $this->Title = $param;
    }
    public function getTitle() {
        return $this->Title;
    }
    public function setDescription($param) {
        $this->Description = $param;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setTemplate($param) {
        $this->Template = $param;
    }
    public function getTemplate() {
        return $this->Template;
    }
    public function setModel($param) {
        $this->Model = $param;
    }
    public function getModel() {
        return $this->Model;
    }
}
