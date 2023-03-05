<?php
class CategoryController{
    // Hàm xử lý hành động index
    public function index(){
        
    }

    public function add(){
        include("views/Category/add_category.php");
    }


    public function delete()
    {
        include("views/Categogy/delete_category.php");
    }

    public function list(){
        include("views/Category/list_category.php");
    }

    public function update()
    {
        // include("views/Categogy/update_category.php");
         include("views/Category/update_category.php");
    }

}
?>