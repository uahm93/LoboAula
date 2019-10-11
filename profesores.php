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
                        <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"> Inicio</span></a>
                    </li>
                    <li>
                        <a href=""><span class="glyphicon glyphicon-user" aria-hidden="true"> Profesores</span></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
   
    <div class="intro-header">
    <br><br>
        <div class="container">
         
         <div class="col-md-4">
            
               <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Acceso a docentes</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="validarprofesor.php" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="No. Trabajador" name="num_trabajador" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contraseña" name="pw1"  type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="entrar">Entrar</button><br>
                                <font color="grey">Registro de nuevo profesor</font><br>
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
                        <form role="form" method="POST" action="validarDocente.php">
                            <fieldset>
                                      
                                      <div class="alert alert-block"><font color="orange">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <span class="label label-warning">Atenciòn</span><br>
                                    Unicamente te puedes registrar si eres profesor de la facultad
                                    </div></font>
                                  <div class="form-group">  
                                 <input class="form-control" placeholder="Nombre" name="nombre" type="text" autofocus>
                                 </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Apellido paterno" name="apellido_paterno" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Apellido materno" name="apellido_materno" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="No.Trabajador" name="num_trabajador" type="text" autofocus>
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Ingresa contraseña" name="pw1" id="pw1" type="password" autofocus required="Campo obligatorio">
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
  