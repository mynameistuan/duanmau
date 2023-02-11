<?php

  function insert_user($user, $pass, $email, $address, $tel, $role){
    $sql = "INSERT INTO account(user, pass, email, address, tel, role) values('$user', '$pass', '$email', '$address', '$tel', '$role')";
    pdo_query($sql);
  }

  function update_user($user, $pass, $email, $address, $tel, $role, $id){
    $sql = "UPDATE account SET user = '".$user."', pass = '".$pass."', email = '".$email."', address = '".$address."', tel = '".$tel."', role = '".$role."' WHERE id = ".$id;
    pdo_execute($sql);
  }

  function delete_user($id){
    $sql = "DELETE FROM account WHERE id = ".$id;
    pdo_query($sql);
  }

  function check_user($user, $pass){
    $sql = "SELECT * FROM account WHERE user = '".$user."' AND pass = '".$pass."'";
    $user = pdo_query_one($sql);
    return $user;
  }

  function loadall_users(){
    $sql = "SELECT * FROM account ORDER BY id ASC";
    $list_user = pdo_query($sql);
    return $list_user;
  }

  function loadone_user($id){
    $sql = "SELECT * FROM account WHERE id = ".$id;
    $user = pdo_query_one($sql);
    return $user;
  }

?>