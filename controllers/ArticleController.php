<?php
include("services/ArticleService.php");
require_once("../models/Article.php");
class ArticleController{
    public function __construct()
    {
        
    }

    public function index(){
        $articleService = new ArticleService(); 
        $articles = $articleService->getAllArticles();
        include("views/home/index.php");
    }
    
    public function add_article(){
        include("views/article/add_article.php");
    }

    public function list_article(){
        include("views/article/list_article.php");
    }

    public function update_article(){
        include("views/article/update_article.php");
    }

    public function delete_article(){
        include("views/article/delete_article.php");
    }
}
