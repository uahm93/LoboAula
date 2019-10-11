<?php
  include ("validaruser.php");
  include("conexion.php");

     $user = $_SESSION['nombre'];
     $message = $_POST['message'];

     $consulta1 = $conect->query("INSERT INTO conversation (iduser,user,message)
			VALUES (NULL,'$user','$message')");

?>