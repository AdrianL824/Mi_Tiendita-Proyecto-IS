<?php

  function getUsers(){
    $sql = CONNECT->prepare('SELECT * FROM users');
    $sql->execute();
    return $sql->fetchAll();
  }

  function getUserByID($id){
    $sql = CONNECT->prepare('SELECT * FROM users WHERE id = ? limit 1');
    $sql->execute([$id]);
    return $sql->fetch();
  }

  function createUser($inputs){
    extract($inputs);
    $sql = "INSERT INTO users (nombre, apellido, email, telefono, ci, direccion, tipo_usr, pass, repit_pas) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $res = CONNECT->prepare($sql);
    $res->execute([$nombre, $apellidos, $correo, $telefono, $ci, $direccion, $tipo_usr, $password, $password]); 
  }


<<<<<<< HEAD
  function updateUser($inputs, $id){
=======
<<<<<<< HEAD
  function updateUser($inputs){
=======
  function updateUser($inputs, $id){
>>>>>>> eee9a943c4eb9e70286402ebe61b3721410b4ee1
>>>>>>> feature/Reg_prov-btn_cancel
    extract($inputs);
    $sql = "UPDATE users SET nombre = ?, apellido = ?, email = ?, telefono = ?, ci = ?, direccion = ?, tipo_usr = ?, pass = ? WHERE id = ?";
    $res = CONNECT->prepare($sql);
    $res->execute([$nombre, $apellidos, $correo, $telefono, $ci, $direccion, $tipo_usr, $password, $id]); 
  }

  function deleteUser($id){
    $sql = "DELETE FROM users WHERE id = ?";
    $res = CONNECT->prepare($sql);
    $res->execute([$id]); 
  }
  

?>