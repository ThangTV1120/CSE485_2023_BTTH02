<?php
class Article{
    // Thuộc tính

    private $title;
    private $summary;
    private $cat_name;


    public function __construct($title, $summary,$cat_name){
        $this->title = $title;
        $this->summary = $summary;
        $this->cat_name = $cat_name;
    }

    // Setter và Getter
    public function getTitle(){
        return $this->title;
    }
}