<?php
include("configs/DBConnection.php");
include("models/Author.php");

class CategoryService
{
    public function getAllCatelogy()
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai";
        $stmt = $conn->query($sql);

        $authors = [];
        while($row = $stmt->fetch()){
            $author = new Author($row['ma_tgia'],$row['ten_tloai']);
            array_push($authors,$author);
        }
        return $authors;
    }
}

?>