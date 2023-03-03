<?php 
   include '../admin/header_admin.php';
    include '../../configs/DBConnection.php';
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_category.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
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
                        // Truy van
                        $sql = "SELECT * FROM theloai";
                        $result = $conn->query($sql);
                        // Xu li ket qua tra ve
                       foreach($result as $row) { //ket qua cua truy van kieu mang
                        ?>

                                <th scope="row"><?=$row['ma_tloai'] ?></th>
                                <td><?=$row['ten_tloai'] ?></td>
                                <td>
                                    <a href="../Category/update_category.php?id=<?=$row['ma_tloai'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href=""><i class="fa-solid fa-trash"></i></a>
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
    <?php include '../admin/footer_admin.php';?>