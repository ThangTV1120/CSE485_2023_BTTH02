
<?php 
include 'header.php'; 
include '/xampp/htdocs/CSE485_2023_BTTH02/configs/DBConnection.php';
?>


<main class="container mt-5" >
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <?php
    // Bước 01: Kết nối tới DB Server
    $dbConn = new DBConnection();
    $conn = $dbConn->getConnection();
    $id=$_GET['id'];
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM baiviet LEFT JOIN theloai on baiviet.ma_tloai=theloai.ma_tloai LEFT JOIN tacgia on baiviet.ma_tgia=tacgia.ma_tgia WHERE ma_bviet=$id ";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result)
    $row=$result->fetch();
    
    ?>
            <div class="row mb-5 padding-top: 2em;">
                <div class="col-sm-4">
                    <img src="<?php echo "CSE485_2023_BTTH02".$row['hinhanh'];?>" class="img-fluid" alt="...">
                </div>
                <div class="col-sm-8">
                    <h5 class="card-title mb-2">
                        <a href="" class="text-decoration-none text-capitalized text-danger fs-3"><?php echo $row['tieude'] ?></a>
                    </h5>
                    <p class="card-text text-white fw-bold" >
                        <span class="text-danger fw-bold">Bài hát: </span><?php echo $row['ten_bhat']?><br>
                        <span class="text-danger fw-bold">Thể loại: </span><?php echo $row['ten_tloai'] ?> <br>
                        <span class="text-danger fw-bold">Tóm tắt: </span><?php echo $row['tomtat'] ?> <br>
                        <span class="text-danger fw-bold">Nội dung: </span> <?php echo $row['noidung'] ?> <br>
                        <span class="text-danger fw-bold">Tác giả: </span><?php echo $row['ten_tgia'] ?> <br>
                    </p>



                </div>
            </div>
    <?php
    //     }
    // }
    ?>

</main>
<?php include 'footer.php'; ?>