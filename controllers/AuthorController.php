<?php
class AuthorController{
    // Hàm xử lý hành động index
    public function index(){
        
    }

    public function add(){
        include("views/Author/add_author.php");
    }

    public function update()
    {
        include("views/Author/update_author.php");
    }

    public function delete()
    {
        include("views/Author/delete_author.php");
    }

    public function list(){
        include("views/Author/list_author.php");
    }


}
?>