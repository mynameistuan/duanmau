<?php
session_start();
include "model/pdo.php";
include "model/products.php";
include "view/header.php";
include "global.php";
include "model/categories.php";
include "model/account.php";
// include "model/cart.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew = select_product_home();
$dsdm = loadall_cat();
$dstop10 = select_product_homeTop10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            include "view/home.php";

        // login
        case "login":
            if(isset($_POST['login'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $checkuser = check_user($user, $password);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Bạn đã login thành công";
                    header("Location: index.php");
                }else{
                    echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác!");</script>';
                }
            }
            include "view/home.php";
            break;

        // logout
        case "logout":
            session_destroy();
            header('Location: index.php');
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
