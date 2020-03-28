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
    include("conexion.php");
    if (isset($_POST['entrar'])) {

      $num_trabajador = $_POST['num_trabajador'];
      $pw1 = $_POST['pw1'];
      $consultas = $conect->query("SELECT * FROM docentes WHERE num_trabajador='$num_trabajador' AND pw='$pw1' ");
      if ($resultado = mysqli_fetch_array($consultas)) {
        $_SESSION['num_trabajador'] = $resultado['num_trabajador'];
        $_SESSION['nombre'] = $resultado['nombre'];
        $_SESSION['user'] = $_SESSION['nombre'] . $resultado['apellido_paterno'];
        echo "<script>window.location='Qprofesores.php';</script>";
      } else {
        echo "<script type=\"text/javascript\">alert('Usuario o ontraseña incorrectos'); window.location='profesores.php';</script>";
      }
    }

    ?>

  </body>

  </html>