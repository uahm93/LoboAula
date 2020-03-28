<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    session_start();
    include("conexion.php");
    if (isset($_SESSION['matricula'])) {
    } else {
        echo "<script>window.location='index.php';</script>";
    }
    ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Streaming</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                        <a href="streaming.php"><span class="glyphicon glyphicon-th-large" aria-hidden="true">
                                Menu</span></a>
                    </li>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                                <?php echo $_SESSION['nombre']; ?> <b class="caret"></b></a>
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
        <br>
        <iframe width="900" height="800" src="http://cdn.livestream.com/embed/loboaula?layout=5&browseMode=true&height=310&width=640" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>
        <div style="font-size: 11px;padding-top:10px;text-align:center;width:640px">Watch <a href=http://original.livestream.com/?utm_source=lsplayer&amp;utm_medium=embed&amp;utm_campaign=footerlinks title=live streaming video></a><a href=http://original.livestream.com/proyectosti?utm_source=lsplayer&amp;utm_medium=embed&amp;utm_campaign=footerlinks title=Watch proyectosti at livestream.com></a></div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Inicio</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="http://www.fcfm.buap.mx/nosotros/">Nosotros</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="http://www.cs.buap.mx/contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Ulises Antonio Hernandez Mendoza. All Rights
                        Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>