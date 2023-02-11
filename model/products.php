<?php

function insert_product($product_name, $price, $image, $desc, $view, $category_id){
    $sql = "INSERT INTO products (name,price,img,mota,view,iddm) VALUES ('$product_name','$price','$image','$desc','$view','$category_id') ";
    pdo_execute($sql);
}

function delete_product($id){
    $sql = "DELETE FROM products WHERE id = $id";
    pdo_execute($sql);
}

function select_product_all($keyword, $filter_category_id){
    $sql = "SELECT * FROM products WHERE 1";

    if ($keyword != "") {
        $sql .= " AND product_name LIKE '%" . $keyword . "%'";
    }
    // if ($filter_category_id > 0) {
    //     $sql .= " AND category_id LIKE '%" . $filter_category_id . "%'";
    // }
    $sql .= " ORDER BY id DESC";
    $product_name = pdo_query($sql);
    return $product_name;
}

function select_product_home(){
    $sql = "SELECT * FROM products WHERE 1 ORDER BY id DESC LIMIT 0,9";     
    $product_name = pdo_query($sql);
    return $product_name;
}

function select_product_homeTop10(){
    $sql = "SELECT * FROM products WHERE 1 ORDER BY view DESC LIMIT 0,10";     
    $product_name = pdo_query($sql);
    return $product_name;
}

function update_product($id, $product_name, $price, $desc, $view, $category_id, $image){
    if ($image != "") {
        $sql = "UPDATE products SET name ='$product_name',price ='$price',mota ='$desc',view ='$view',iddm ='$category_id',img ='$image' WHERE id =$id";
    } else {
        $sql = "UPDATE products SET name ='$product_name',price ='$price',mota ='$desc',view ='$view',iddm ='$category_id' WHERE id =$id";
    }
    pdo_execute($sql);
}

function select_product_one($id){
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function select_name_category($id){
    $sql = "SELECT * FROM category WHERE id = $id";
    $result = pdo_query_one($sql);
    $name_category = $result['category_name'];
    return $name_category;
}

function select_product_same_category($id,$category_id){
    $sql = "SELECT * FROM products WHERE category_id = $category_id AND id <> $id";
    $result = pdo_query($sql);
    return $result;
}
