<?php

class Helpers extends Controller{

    function __construct() {
        $readGb = new Read;
        $readGb->ExeRead("posts");
        $allPosts = $readGb->getResult();
        foreach ($allPosts as $item){
            $post = new Post($item['Title'], $item['Description'], $item['Content'], $item['Author'], $item['Date']);
            $listModel[] = $post;
        }       
        parent::__construct("Helpers","Utilizando helpers para conectar com banco de dados e renderiza conteúdo","Template",$listModel);
    }
    
    public function index() {
        $this->renderView("index");
    }
}

