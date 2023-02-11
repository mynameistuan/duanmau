<?php
    function insert_cat($tenloai){
        $sql = "INSERT INTO categories(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_cat($id){
        $sql = "DELETE FROM  categories WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_cat(){
        $sql = "SELECT*FROM categories ORDER BY id DESC";
        $listcat = pdo_query($sql);
        return $listcat;
    }
    function loadone_cat($id){
        $sql = "SELECT * FROM categories WHERE id=".$id;
        $cat = pdo_query_one($sql);
        return $cat;
    }
    function update_cat($id, $tenloai){
        $sql = "UPDATE categories SET name='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>