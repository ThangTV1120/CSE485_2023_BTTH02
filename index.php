<?php
// // B1: Bắt giá trị controller và action
// $controller = isset($_GET['controller'])?   $_GET['controller']:'home';
// $action     = isset($_GET['action'])?       $_GET['action']:'index';

// // B2: Chuẩn hóa tên trước khi gọi
// $controller = ucfirst($controller);
// $controller .= 'Controller';
// $controllerPath = 'controllers/'.$controller.'.php';

// // B3. Để gọi nó Controller
// if(!file_exists($controllerPath)){
//     die('Lỗi! Controller này không tồn tại');
// }
// require_once($controllerPath);
// // B4. Tạo đối tượng và gọi hàm của Controller
// $myObj = new $controller();  //controller=home > new HomeController()
// $myObj->$action(); //action=index > index()
?>

<!-- Routing là gì? Định tuyến/Điều hướng -->
<!-- Phân tích xem: URL của người dùng > Muốn gì -->
<!-- Ví dụ: Trang chủ, Quản lý bài viết hay Thêm bài viết -->
<!-- Chuyển quyền cho Controller tương ứng điều khiển tiếp -->
<!-- URL của tôi thiết kế luôn có dạng: -->

<!-- http://localhost/btth02v2/index.php?controller=A&action=B -->
<!-- http://localhost/btth02v2/index.php -->
<!-- http://localhost/btth02v2/index.php?controller=home&action=index -->

<!-- Controller là tên của FILE controller mà chúng ta sẽ gọi -->
<!-- Action là tên cả HÀM trong FILE controller mà chúng ta gọi -->

<?php
// B1: Bắt giá trị controller và action
$controller = isset($_GET['controller']) ?   $_GET['controller'] : 'home';
$action     = isset($_GET['action']) ?       $_GET['action'] : 'index';
$do         = isset($_GET['do'])         ?   $_GET['do']:null;

if ($controller == 'home') {
    require('controllers/HomeController.php');
    $controller = new HomeController();
    if ($action == "index") {
        $controller->index();
    } else if ($action == "detail") {
    
        $controller->detail();
    }
}
if ($controller == 'admin') {
    if ($action == "admin") {
        include('views/admin/admin.php');
    } 
    if ($action == "author") {
        require('controllers/AuthorController.php');
        $controller = new AuthorController();
        if ($do == "list") {
            $controller->list();
        } elseif ($do == "add") {
            // $controller->add();
        } elseif ($do == "delete") {
            $controller->delete();
        }  elseif ($do==="update") {
            $controller->update();
        }
    } 
    if ($action == "category") {
        require ('controllers/CategoryController.php');
        $controller = new CategoryController();
        if ($do == "list") {
           
            $controller->list();
        } elseif ($do == "add") {

            $controller->add();
        } elseif ($do == "delete") {

            $controller->delete();
        } elseif ($do == "update") {

            $controller->update();
        }
    } 
    if ($action == "article") {
        require('controllers/ArticleController.php');
        $controller = new ArticleController();
        if ($do == "list") {

            $controller->list();
        } elseif ($do == "add") {

            $controller->add();
        } elseif ($do == "delete") {

            $controller->delete();
        } elseif ($do == "update") {

            $controller->update();
        }
    }
}





























// switch ($controller) {
//     case 'home':{
//         switch ($action) {
//             case 'index':
//                 require('controllers/HomeController.php');
//                 $controller = new HomeController();
//                 $controller->index();
//                 break;
//             case 'detail':
//                 include('controllers/HomeController.php');
//                 $controller = new HomeController();
//                 $controller->detail();
//                 break;
//         }
//     }
//     case 'admin': {
//             switch($action) {
//                 case 'admin':
//                     include('views/admin/admin.php');
//                 case 'category': 
//                         switch ($do) {
//                             case 'list':
//                                 require('controllers/CategoryController.php');
//                                 $controller = new CategoryController();
//                                 $controller->list();
//                                 break;
//                         }

//                 case 'author': 
//                         switch ($do) {
//                             case 'list':
//                                 require('controllers/AuthorController.php');
//                                 $controller = new AuthorController();
//                                 $controller->list();
//                                 break;
//                         }


//                 case 'article': 
//                         switch ($do) {
//                             case 'list':
//                                 require('controllers/ArticleController.php');
//                                 $controller = new ArticleController();
//                                 $controller->list();
//                                 break;
//                         }
//                     }

//         }
// }
?>