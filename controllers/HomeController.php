<?php
include("services/CategoryService.php");

class HomeController{
    public function index(){
        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCatelogy();
        include("views/home/index.php");
    }
}