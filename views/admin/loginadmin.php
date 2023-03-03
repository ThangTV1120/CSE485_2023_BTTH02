<?php include('../admin/header_admin.php') ?>
    
    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                <?php 
                
              
                
                //Xử lý đăng nhập
                
                if (isset($_POST['btnlogin'])==true) {
                    $tendangnhap = $_POST['txtUsername'];
                    $matkhau = $_POST['txtPassword'];
                   
                    $conn =new PDO("mysql:host=localhost;dbname=btth01_cse485;charset=utf8","root","");
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   // Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
                    if (! $tendangnhap || ! $matkhau) {
                        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                        exit;
                    }
                    $sql = "select * from users where user_name = ? and password = ?";
                    $stmt = $conn->prepare($sql) ;
                    $stmt->execute([$tendangnhap,$matkhau]);
                   if ($stmt->rowCount()==1){
                   $user = $stmt->fetch();
                   header("location:index.php");
                   }
                 else{
                    echo "<p style='text-align: center; '> Đăng nhập sai.Vui lòng đăng nhập lại  </p>";
                   }


                }
                   
        
                
                ?>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                                <input type="text" name="txtUsername" class="form-control" placeholder="username"  >
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                                <input type="password" name="txtPassword" class="form-control" placeholder="password" >
                            </div>
                            
                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btnlogin" value="Login" class="btn float-end login_btn" >
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center ">
                            Don't have an account?<a href="#" class="text-warning text-decoration-none">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                        </div>
                    </div>
                </div>

        </div>
    </main>
<?php include('../admin/footer_admin.php') ?>