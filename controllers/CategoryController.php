<?php
class CatelogyController{
    // Hàm xử lý hành động index
    public function index(){

    }

    public function add(){
        include("views/Catelogy/add_catelogy.php");
    }

    public function update()
    {
        include("views/Catelogy/update_catelogy.php");
    }

    public function delete()
    {
        include("views/Catelogy/delete_catelogy.php");
    }

    public function list(){
        include("views/Catelogy/list_catelogy.php");
    }


}