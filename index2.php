<?php
session_start();
include "model/pdo.php";
include "model/products.php";
include "view/header.php";
include "global.php";
include "model/categories.php";
include "model/account.php";
include "model/cart.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

// $spnew = loadall_pro_home();
$dsdm = loadall_cat();
// $dstop10 = loadall_pro_top10();


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                // $onesp = loadone_pro($id);
                extract($onesp);
                // $sp_cungloai = load_pro_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            // $dssp = loadall_pro($kyw, $iddm);
            // $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                // insert_account($email, $user, $pass);
                $thongbao = "Đăng ký thành công. Đăng nhập để sử dụng chức năng";
            }
            include "view/account/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                // $checkuser = checkuser($user, $pass);
            if(is_array($checkuser)){
                $_SESSION['user'] = $checkuser;
                header('Location: index.php');
            }else{
                $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra HOẶC đăng kí mới";
            }
            }
            include "view/account/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                // update_taikhoan($id,$user, $pass, $email, $address, $tel);
                // $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            include "view/account/edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['gui']) && ($_POST['gui'])) {
                $email = $_POST['email'];
                // $checkemail= checkemail($email);
                if(is_array($checkemail)){
                    $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                }else{
                    $thongbao = "Email không tồn tại.";
                }
            }
            include "view/account/quenmk.php";
            break;
        case 'exit':
            session_unset();
            header ('Location: index.php');
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id =$_POST['id'];
                $name =$_POST['name'];
                $img =$_POST['img'];
                $price =$_POST['price'];
                $soluong=1;
                $ttien = $soluong*$price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
                
            }
            include "view/cart/viewcard.php";
            break;
        case 'delcart':
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'], 1);
            }else{
                $_SESSION['mycart'] = [];
            }
            include "view/cart/viewcard.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id =0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $pttt = $_POST['pttt'];
                $tel = $_POST['tel'];
                $ngaydathang = date('h:i:sa d/m/Y');
                // $tongdonhang = tongdonhang();

                // $idbill = insert_bill($iduser, $name, $address, $email, $tel, $pttt,  $ngaydathang, $tongdonhang);
                foreach ($_SESSION['mycart'] as $cart) {
                    // insert_cart($_SESSION['user']['id'], $cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5], $idbill);
                }
                $_SESSION['cart']=[];
            }
            // $bill = loadone_bill($idbill);
            // $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            // $listbill = loadall_cart_user($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
