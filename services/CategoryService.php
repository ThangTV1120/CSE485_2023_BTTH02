<?php
include("configs/DBConnection.php");
include("models/Category.php");

class CategoryService
{
    public function getAllCatelogy()
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai";
        $stmt = $conn->query($sql);

        $catelogies = [];
        while($row = $stmt->fetch()){
            $category = new Category($row['ma_tloai'],$row['ten_tloai']);
            array_push($catelogies,$category);
        }
        return $catelogies;
    }
}

?>