<!DOCTYPE html>
<html lang="en">

<head>
     <?php
     session_start();
     include ("conexion.php");
     if(isset($_SESSION['matricula'])){
      echo "<script>window.location='streaming.php';</script>"; 
     }
      ?>

 <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <!-- Custom Fonts -->
    


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
                <a class="navbar-brand topnav" href="#"><font size="15%" color="#64a36f"><strong>LOBOAULA</strong></font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"> Inicio</span></a>
                    </li>
                    <li>
                        <a href="profesores.php"><span class="glyphicon glyphicon-user" aria-hidden="true"> Profesores</span></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
   
    <div class="intro-header">
    <br>
        <div class="container">
         <div class="col-md-8">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/1.jpg" alt="">
                                    <div class="carousel-caption">
                                    <h3>Cursos en linea</h3>
                                        
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/4.jpg" alt="">

                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

</div>
        </div>
         <div class="col-md-4">
               <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Favor de ingresar</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="validaruser.php" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Matricula" name="matricula" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="pw1"  type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Clave de acceso" name="clave"  type="text" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="entrar">Entrar</button><br>
                                <font color="grey">¿Aún no estas registrado?</font><br>
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Registrate
                                </button>

                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        </form>
                    </div>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><font color="grey">Nuevo usuario</font></h4>
      </div>
      <div class="modal-body">
                  
                    <div class="panel-body">
                        <form role="form" method="POST" action="Qinsertaruser.php">
                            <fieldset>
                                      
                                      <div class="alert alert-block"><font color="orange">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <span class="label label-warning">Atenciòn</span><br>
                                    Pedir autorización al profesor para poder acceder
                                    </div></font>
                                 
                                 <input class="form-control" placeholder="Nombre(s)" name="nombre" type="text" autofocus>
                                 </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Apellido paterno" name="a_paterno" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Apellido materno" name="a_materno" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Matricula" name="matricula" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Ingresa una contraseña" name="pw1" id="pw1" type="password" autofocus required="Campo obligatorio">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Repite contraseña" id="pw2" name="pw2" type="password" autofocus required="Campo obligatorio">
                                    <div id="error2"><br></div>
                                </div><br>
                                <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                        </form> 
                    </div>
                                <!-- Change this to a button or input when using this as a form -->
                                
                            </fieldset>
                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div> 
</div>
                </div>
         </div>


        </div>
        <a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <font color="grey"><h2 class="section-heading">Clases en vivo<br>con la tecnologia streaming</h2>
                    <p class="lead">Asiste a clases sin la necesidad de ir a una aula, con la tecnologia streaming puedes ver cursos en vivo o ver 
                    los que ya han sido transmitidos</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/5.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

   

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="streaming.php">Inicio</a>
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
                    <p class="copyright text-muted small">Copyright &copy; Ulises Antonio Hernandez Mendoza. All Rights Reserved</p>
                </div>
            </div>
        </div>

    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/misfunciones.js"></script>
  
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
  