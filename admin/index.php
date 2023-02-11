<?php
include "../model/pdo.php";
include "../model/categories.php";
include "../model/products.php";
include "../model/account.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case "customer":
            $list_user = loadall_users();
            include "account/list.php";
            break;

        case "add_customer":
            if(isset($_POST['add'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];

                insert_user($user, $pass, $email, $address, $tel, $role);
                $notify = "Thêm thành công"; 
            }
            include "account/add.php";
            break;

        case "update_user":
            if(isset($_GET['id']) && ($_GET['id']) > 0){
                $user = loadone_user($_GET['id']);
            }

            include "account/update.php";
            break;

        case "update_user_save":
            if(isset($_POST['update'])){
                $id = $_POST['id'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];

                update_user($user, $pass, $email, $address, $tel, $role, $id);
                $notify = "Cập nhật thành công"; 
            }

            $list_user = loadall_users();
            include "account/list.php";
            break;

        case "delete_user":
            if(isset($_GET['id']) && ($_GET['id']) > 0){
                delete_user($_GET['id']);
            }

            $list_user = loadall_users();
            include "account/list.php";
            break;
        case 'addcat':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenloai = $_POST['tenloai'];
                insert_cat($tenloai);
                $thongbao = "Add Succesfull";
            }
            include "categories/addcat.php";
            break;
        case 'listcat':
            $listcat = loadall_cat();
            include "categories/list.php";
            break;
        case 'delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_cat($_GET['id']);
            }

            $listcat = loadall_cat();
            include "categories/list.php";
            break;
        case 'update':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $cat = loadone_cat($_GET['id']);
            }
            include "categories/update.php";
            break;
        case 'upcat':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_cat($id, $tenloai);
                $thongbao = "Update Succesfully";
            }
            $listcat = loadall_cat();
            include "categories/list.php";
            break;
        case 'addpro':
            if (isset($_POST['add_new']) && $_POST['add_new']) {

                $product_name = $_POST['name'];
                $price = $_POST['price'];


                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                } else {
                }


                $desc = $_POST['desc'];

                $view = $_POST['view'];
                $category_id = $_POST['category_id'];

                insert_product($product_name, $price, $image, $desc, $view, $category_id);
                $notify = "Succesfully add new product";
            }
            $category_name =  loadall_cat();
            include "products/add_product.php";
            break;
        case 'listproduct':
            if (isset($_POST['submit_filter_product']) && $_POST['submit_filter_product']) {

                $keyword = $_POST['filter_product'];
                $filter_category_id = $_POST['category_id'];
            } else {
                $keyword =  "";
                $filter_category_id = 0;
            }
            // $category_name =  select_category_all();
            $product_name = select_product_all($keyword, $filter_category_id);
            include "products/list.php";
            break;
        case 'edit_product':
            $id = isset($_GET['id']) ? $_GET['id'] : 0;

            if ($id > 0) {
                $result = select_product_one($id);
            }

            $category_name =  loadall_cat();
            include "products/update.php";
            break;
        case 'update_product':
            $id = isset($_POST['id']) ? $_POST['id'] : 0;
         
            if (isset($_POST['update']) && ($_POST['update'])) {
                $id = isset($_POST['id']) ? $_POST['id'] : 0;
                $product_name = isset($_POST['name']) ? $_POST['name'] : "";
                $price = isset($_POST['price']) ? $_POST['price'] : "";                                
                $desc = isset($_POST['desc']) ? $_POST['desc'] : "";                
                $view = isset($_POST['view']) ? $_POST['view'] : "";
                $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : "";
                $image = $_FILES['image']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['image']['name']);

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                } else {
                }
                update_product($id, $product_name, $price, $desc, $view, $category_id, $image);
                $notify = "Update successfully";
            }

            $product_name = select_product_all("", 0);
            $category_name =  loadall_cat();
            include "products/list.php";
            break;
        case 'delete_product':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                if ($id > 0) {
                    delete_product($id);
                }
                $product_name = select_product_all("", 0);
                $category_name =  loadall_cat();
                include "products/list.php";
                break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
