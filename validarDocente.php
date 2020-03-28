<?php

echo "<meta charset='utf-8'>";
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$num_trabajador = $_POST['num_trabajador'];
$pw1 = $_POST['pw1'];

if ($_POST["pw1"] != $_POST["pw2"]) {
	echo "<script type=\"text/javascript\">alert('Las contraseñas no coinciden'); window.location='profesores.php';</script>";
} else {
	include("conexion.php");
	if ($comparar = $conect->query("SELECT * FROM docentes WHERE num_trabajador='$num_trabajador' ")) {
		$almacenar = $comparar->num_rows;
		$comparar->free();
		if ($almacenar > 0) {


			echo "<script type=\"text/javascript\">alert('num_Trabajador no registrado en base de datos'); window.location='profesores.php';</script>";
		} else {
			$consultas = $conect->query("INSERT INTO docentes (nombre,apellido_paterno,apellido_materno,num_trabajador,pw)
			                 VALUES ('$nombre','$apellido_materno','$apellido_paterno','$num_trabajador','$pw1')");
			echo "<script type=\"text/javascript\">alert('Se ha registrado correctamente'); window.location='profesores.php';</script>";
		}
	}
}

   //if($resultado = mysqli_fetch_array( $consultas))
