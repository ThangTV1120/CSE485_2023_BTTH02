<?php    include 'views/admin/header_admin.php';
   include( 'configs/DBConnection.php');
     // include ('../../models/Article.php'); 
      ?>

    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa bài viết</h3>
                <form action="ArticleService.php" method="post">
                    <?php
                        // Ket noi db
                        $dbConn = new DBConnection();
                        $conn = $dbConn->getConnection();
                        // Truy van
                        $ma_bviet = $_GET['id'];
                        $sql = "SELECT * FROM baiviet WHERE ma_bviet = $ma_bviet";                 //  $sql = "SELECT * FROM tacgia WHERE ma_tgia=$id ";
                        $result = $conn->query($sql);

                        $row = $result->fetchAll();
                    ?>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>
                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mã Thể loại</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nội dung</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mã tác giả</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ngày Viết</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <form action="upload.php" method="post" enctype="multipart/form-data"> Chọn ảnh:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                        </form> 
                        
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" name="btt_update" class="btn btn-success">
                        <a href="index.php?controller=admin&action=article&do=list" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>