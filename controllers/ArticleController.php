<?php
include("services/ArticleService.php");
class ArticleController{
    public function index(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticles();
        // Nhiệm vụ 2: Tương tác với View
        include("views/home/index.php");
    }
    
    public function add(){
        include("views/article/add_article.php");
    }

    public function list(){
        include("views/article/list_article.php");
    }
}
?>