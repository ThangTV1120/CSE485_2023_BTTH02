
<?php include 'header.php';
include '/htdocs/CSE485_2023_BTTH02/configs/DBConnection.php';
?>

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                <img src="/CSE485_2023_BTTH02/assets/images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                <img src="/CSE485_2023_BTTH02/assets/images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                <img src="/CSE485_2023_BTTH02/assets/images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </header>
    
    <main class="container-fluid mt-3" style="margin-bottom: 5%;">
        <h3 class="text-left text-uppercase mb-3 text-primary fw-bold fs-2 text-danger">TOP bài hát yêu thích</h3>
        <div class="row">
            <?php
                // Ket noi db
                $conn = mysqli_connect('localhost','root','','btth01_cse485');
                if(!$conn){
                    die('Kết nối tới Server lỗi');
                }
                // Truy van
                $sql = "SELECT * FROM baiviet ORDER BY ma_bviet";
                $result = mysqli_query($conn, $sql); 
                // Xu li ket qua tra ve
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                       
            ?>
                <div class="col-sm-3">
                    <div class="card mb-2 bg-danger border-red" style="width: 100%;">
                        <img src="<?php echo $row['hinhanh'];?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="detail.php?id=<?= $row['ma_bviet']?>" class="text-decoration-none text-white fw-bold">
                                <?php echo $row['ten_bhat'];?>
                            </a>
                        </h5>
                        </div>
                    </div>
                </div>

            <?php
                    }
                }
            ?>
    </main>
<?php include 'footer.php';?>