<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

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
                <a class="navbar-brand topnav" href="#"><font size="15%" color="#191970"><strong>BUAP</strong></font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"> Inicio</span></a>
                    </li>
                    
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-education" aria-hidden="true"> Investigadores</span></a>
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
        <h3><font color="grey">Lista de investigaciones</h3>
        <div class="container">
         <div class="col-md-12">

              <div class="panel panel-default">
                        <div class="panel-heading">
                           <font color="grey"> Lista de proyectos
                        </div>
                        <!-- /.panel-heading -->
                         <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id del articulo</th>
                                            <th>Nombre del investigador</th>
                                            <th>Nombre del articulo</th>
                                            <th>Fecha del articulo</th>
                                            <th>Articulo</th>                                           
                                        </tr>
                                    </thead>
                                    <?php
                                    include ("conexion.php");
                                    
                     echo "<tbody>";
                     $result2 = $conect->query("SELECT * FROM inves ");                 
                     while($row = $result2->fetch_array(MYSQLI_ASSOC))
                    {                   
                     echo " <tr class='odd gradeX'>";
                     echo "<td>$row[id_autor]</td>";
                     echo "<td>$row[nombre_autor]</td>";                    
                     echo "<td>$row[nombre_articulo]</td>";
                                                          
                     echo "<td>$row[fecha]</td>";
                     echo "<td>$row[articulo]</td>";
                     
                    
                     echo "</tr>";
                     
                    }
                     
                     $conect->close();
                echo "</tbody>";
                      

                      ?>
                                 
                                </table>
               
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>  

        </div>
     </div>   
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
                    <p class="copyright text-muted small">Copyright &copy; Ulises Antonio Hernandez Mendoza. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
 
    </script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
     <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="bower_components/datatables-responsive/js/dataTables.responsive.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>


</body>

</html>
  