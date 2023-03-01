<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="./index.php">Trang chủ</a></li>
        <li><a href="./index.php?controller=catelogy&action=list">Thể loại</a></li>
    </ul>
    <h1>Tôi là TRANG CHỦ</h1>
    <?php
        foreach($categories as $category){
            echo "<br>{$category->getTitle()}"."        "."{$category->getTen()}</br>";
        }
    ?>
</body>
</html>