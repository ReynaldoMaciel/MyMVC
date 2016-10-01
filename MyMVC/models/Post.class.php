<?php

class Post {
    private $Title;
    private $Description;
    private $Content;
    private $Author;
    private $Date;
    
    function __construct($Title, $Description, $Content, $Author, $Date) {
        $this->Title = $Title;
        $this->Description = $Description;
        $this->Content = $Content;
        $this->Author = $Author;
        $this->Date = $Date;
    }
    
    function getTitle() {
        return $this->Title;
    }

    function getDescription() {
        return $this->Description;
    }

    function getContent() {
        return $this->Content;
    }

    function getAuthor() {
        return $this->Author;
    }

    function getDate() {
        return $this->Date;
    }

    function setTitle($Title) {
        $this->Title = $Title;
    }

    function setDescription($Description) {
        $this->Description = $Description;
    }

    function setContent($Content) {
        $this->Content = $Content;
    }

    function setAuthor($Author) {
        $this->Author = $Author;
    }

    function setDate($Date) {
        $this->Date = $Date;
    }


}
