<?php
define("APP_ROOT",dirname(__FILE__),3);
class HomeController{
    public function index(){
        //echo APP_ROOT;
        include("views/home/index.php");
        
    }
    public function detail(){
        include("views/home/detail.php");
    }
}
?>