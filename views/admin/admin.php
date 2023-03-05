<?php
include 'connection.php';
$sql_count_user = "SELECT COUNT(*) FROM users";
$sql_count_theloai = "SELECT COUNT(*) FROM theloai";
$sql_count_tacgia = "SELECT COUNT(*) FROM tacgia";
$sql_count_baiviet = "SELECT COUNT(*) FROM baiviet";
$result_count_user = mysqli_query($conn, $sql_count_user);
$result_count_theloai = mysqli_query($conn, $sql_count_theloai);
$result_count_tacgia = mysqli_query($conn, $sql_count_tacgia);
$result_count_baiviet = mysqli_query($conn, $sql_count_baiviet);
?>
<?php 
   include 'views/admin/header_admin.php';?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Người dùng</a>
                        </h5>
                        <h5 class="h1 text-center">
                            <?php
                                echo(mysqli_fetch_array($result_count_user)[0]);
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Thể loại</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php echo mysqli_fetch_array($result_count_theloai)[0] ?>
                            
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Tác giả</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                                $count_tacgia = mysqli_fetch_array($result_count_tacgia)[0];
                                echo $count_tacgia;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Bài viết</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                                $count_baiviet = mysqli_fetch_array($result_count_baiviet)[0];
                                echo $count_baiviet;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include '/xampp/htdocs/CSE485_2023_BTTH02/views/admin/footer_admin.php';?>