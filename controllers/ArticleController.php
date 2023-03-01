<?php
class ArticleController{
    public function index(){
        echo "Tương tác với Services/Models from Article";
        echo "Tương tác với View from Article";
    }

    public function add(){
        include("views/article/add_article.php");
    }

    public function list(){
        include("views/article/list_article.php");
    }


    
}