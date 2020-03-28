<?php

echo "<meta charset='utf-8'>";
$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$matricula = $_POST['matricula'];
$pw1 = $_POST['pw1'];

if ($_POST["pw1"] != $_POST["pw2"]) {
	echo "<script type=\"text/javascript\">alert('Las contraseñas no coinciden'); window.location='index.php';</script>";
} else {
	include("conexion.php");
	if ($comparar = $conect->query("SELECT * FROM usuarios WHERE matricula='$matricula' ")) {
		$almacenar = $comparar->num_rows;
		$comparar->free();
		if ($almacenar > 0) {


			echo "<script type=\"text/javascript\">alert('La matricula ya existe o numero de empleado ya existe, intenta otra vez'); window.location='index.php';</script>";
		} else {
			$consultas = $conect->query("INSERT INTO usuarios (nombre,a_materno,a_paterno,matricula,pw)
			                 VALUES ('$nombre','$a_materno','$a_paterno','$matricula','$pw1')");
			echo "<script type=\"text/javascript\">alert('Se ha registrado correctamente'); window.location='index.php';</script>";
		}
	}
}

   //if($resultado = mysqli_fetch_array( $consultas))
