<!DOCTYPE html>

<html lang="en">
<?php

session_start();

include("conexion.php");
if (isset($_SESSION['num_trabajador'])) {
} else {
    echo "<script>window.location='profesores.php';</script>";
}
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Streaming</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Archivos para chat -->
    <link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
    <link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />

    <!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">
                    <font size="15%" color="#64a36f"><strong>LOBOAULA</strong></font>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="vistagenerarclave.php"><span class="glyphicon glyphicon-random" aria-hidden="true"> Claves</span></a>
                    </li>

                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['nombre']; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">


                                <li>
                                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Cerrar sesión</a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->

    <div class="intro-header">
        <br><br>
        <br><br>


        <!-- input con fecha e iniciales del curso  -->
        <form role="form" method="POST" action="generarclave.php">
            <font color="black">
                <h3>Generar claves</h3>
                <table class="table table-hover">
                    <tr>
                        <td><label>Seleccionar materia<br>
                                <select name="seleccionarMateria" class="form-control">
                                    <option value="programacion">POO II</option>
                                    <option value="Admon_redes">Administración de redes</option>
                                    <option value="bases_de_datos">Bases de datos</option>
                                    <option value="matematica_discretas">Matemáticas discretas</option>
                                </select>

                    </tr>
                    <tr>
                        <td><label>Carrera<br>
                                <select name="carrera" class="form-control">
                                    <option value="ITI">ITI</option>
                                    <option value="ICC">ICC</option>
                                    <option value="LIC">Licenciatura</option>

                                </select>

                    </tr>
                    <tr>
                        <td><label>Periodo<br>
                                <select name="periodo" class="form-control">
                                    <option value="primavera_2018">Primavera 2018</option>
                                    <option value="verano_2018">Verano 2018</option>
                                    <option value="otono_2018">Otoño 2018</option>
                                    <option value="Primavera_2019">Primavera 2019</option>
                                </select>

                    </tr>

                    <td>
                        <button type="submit" class="btn btn-primary btn-lg">Generar clave</button>
                    </td>
                    </tr>
                </table>
        </form>
    </div>
    <!-- Footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>

</body>
</html>