<?php 
   include 'views/admin/header_admin.php';
   include( 'configs/DBConnection.php');
   ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giải</h3>
                <form action="process_add_author.php" method="post">
                    <?php
                    // Bước 01: Kết nối tới DB Server
                    $dbConn = new DBConnection();
                    $conn = $dbConn->getConnection();
                    $id = $_GET['id'];
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM tacgia WHERE ma_tgia=$id ";
                    $result = $conn->query($sql);
                    // $row = mysqli_fetch_assoc($result)
                    $row=$result->fetch();

                    ?>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã tác giả</span>
                        <input type="text" class="form-control" name="txtCatId" readonly value="<?=$row['ma_tgia']?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <input type="text" class="form-control" name="txtCatName" value="<?=$row['ten_tgia']?>" >
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" name="btt_update" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php include '/xampp/htdocs/CSE485_2023_BTTH02/views/admin/footer_admin.php';?>