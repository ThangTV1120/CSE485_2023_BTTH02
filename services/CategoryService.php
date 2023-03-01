<?php
include("configs/DBConnection.php");
include("models/Catelogy.php");

class CatelogyService
{
    public function getAllCatelogy()
    {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM theloai";
        $stmt = $conn->query($sql);

        $catelogies = [];
        while($row = $stmt->fetch()){
            $catelogy = new Catelogy($row['ma_tloai'],$row['ten_tloai']);
            array_push($catelogies,$catelogy);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $catelogies;
    }
}

?>