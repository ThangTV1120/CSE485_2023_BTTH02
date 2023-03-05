<?php 
    include 'views/admin/header_admin.php';
   include( 'configs/DBConnection.php');
?>
<main class="container mt-5 mb-5">
<div class="row">
            <div class="col-sm">
                <a href="index.php?controller=admin&action=author&do=add" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên tác giả </th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Ket noi db
                        $dbConn = new DBConnection();
                        $conn = $dbConn->getConnection();
                        // Truy van
                        $sql = "SELECT * FROM tacgia";
                        $result = $conn->query($sql);
                        $row = $result->fetchAll();
                        // Xu li ket qua tra ve
                        foreach($row as $row){ //ket qua cua truy van kieu mang
                        ?>

                                <th scope="row"><?=$row['ma_tgia'] ?></th>
                                <td><?=$row['ten_tgia'] ?></td>
                                <td>
                                    <a href="index.php?controller=admin&action=author&do=update&id=<?=$row['ma_tgia'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="../Author/delete_author.php"><i class="fa-solid fa-trash"></i></a>
                                </td>
                                </tr>
                        <?php
                            }
                        
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php include '/xampp/htdocs/CSE485_2023_BTTH02/views/admin/footer_admin.php';?>