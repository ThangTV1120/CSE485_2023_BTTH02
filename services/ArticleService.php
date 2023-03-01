<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService{
    public function getAllArticles(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM article INNER JOIN category ON article.category_id=category.id";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $articles = [];
       
        // Mảng (danh sách) các đối tượng Article Model

        return $articles;
    }
}