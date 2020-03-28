<?php

echo "<meta charset='utf-8'>";
$seleccionarMateria = $_POST['seleccionarMateria'];
$carrera = $_POST['carrera'];
$periodo = $_POST['periodo'];
$materia = substr($seleccionarMateria, 1, 3);
$rand = rand(1, 90);
$rand2 = rand(1, 90);
$clave = $materia . $rand2 . $carrera . $rand;


include("conexion.php");

$consultas = $conect->query("INSERT INTO claves (clave, periodo,materia)
			  VALUES ('$clave', '$periodo', '$seleccionarMateria')");
echo "<script type=\"text/javascript\">alert('Se ha generado correctamente'); window.location='vistagenerarclave.php';</script>";
