<?php 
   include 'views/admin/header_admin.php';
   include( 'configs/DBConnection.php');
   ?>

<main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
                <form action="process_add_category.php" method="post">
                    <?php
                    // Bước 01: Kết nối tới DB Server
                    $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
                    $id = $_GET['id'];
                    if (!$conn) {
                        die('Kết nối tới Server lỗi');
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM theloai WHERE ma_tloai=$id ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result)

                    ?>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['ma_tloai']?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <input type="text" class="form-control" name="txtCatName" value="<?=$row['ten_tloai']?>" >
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" name="btt_update" class="btn btn-success">
                        <a href="index.php?controller=admin&action=category&do=list" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include '/xampp/htdocs/CSE485_2023_BTTH02/views/admin/footer_admin.php';?>