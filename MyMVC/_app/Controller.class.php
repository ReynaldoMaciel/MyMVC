<?php

abstract class Controller {
    
    public $Page;
    
    function __construct($titulo, $descricao, $template, $model) {
        $aux = new Page($titulo, $descricao, $template, $model);
        $this->setPage($aux->getTitle(), $aux->getDescription(), $aux->getTemplate(), $aux->getModel());
    }
        
    private function setPage($titulo, $descricao, $template, $model) {
        $this->Page = new Page($titulo, $descricao, $template, $model);
    }
    
    public function getPage() {
        return $this->Page;
    }

    public function renderView($fileName) {
        
        $aux = $this->getPage();
        
        $pagina['Título'] = $aux->getTitle();
        $pagina['Descricao'] = $aux->getDescription();
        
        $file = getcwd() . "\\views\\". get_class($this) ."\\{$fileName}.php";
        if(is_file($file)):
            require($file);
        else:
            die("Não existe o arquivo {$fileName} no diretório views");
        endif;        
    }    
}
