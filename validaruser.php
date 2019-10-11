<?php
session_start();
?>
<<!DOCTYPE html>
<html>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
<body>
  <?php
include ("conexion.php");
if(isset($_POST['entrar'])){
    
    $matricula= $_POST['matricula'];
    $pw1= $_POST['pw1'];
    $clave= $_POST['clave'];
    $consultas = $conect->query("SELECT * FROM usuarios WHERE matricula='$matricula' AND pw='$pw1' ");
    $consultas2 = $conect->query("SELECT * FROM claves WHERE clave='$clave'");

    if($resultado = mysqli_fetch_array( $consultas) and $resultado2 = mysqli_fetch_array( $consultas2)){

        $_SESSION['matricula'] = $resultado['matricula'];
        $_SESSION['nombre'] = $resultado['nombre'];
        
        $_SESSION['user'] = $_SESSION['nombre'].$resultado['a_paterno'];
        
        echo "<script>window.location='streaming.php';</script>"; 
    	  
    }else
    {
           echo"<script type=\"text/javascript\">alert('Usuario, contraseña o clave incorrectos'); window.location='index.php';</script>";

    }
  
}
  
  ?>

</body>
</html>