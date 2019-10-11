<!DOCTYPE html>
<html lang="en">

<head>
    <?php
         
         session_start();
         
         include("conexion.php");
         if(isset($_SESSION['matricula'])){
            
         }else{
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
                <a class="navbar-brand topnav" href="#"><font size="15%" color="#64a36f"><strong>LOBOAULA</strong></font></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  
                   <li>
                        <a href="streaming.php"><span class="glyphicon glyphicon-th-large" aria-hidden="true"> Menu</span></a>
                    </li>
                    <ul class="nav navbar-top-links navbar-right">  
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $_SESSION['nombre']; ?> <b class="caret"></b></a>
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
         

        <!--   -->
         <div class="col-md-7">
             <iframe width="560" height="340" src="http://cdn.livestream.com/embed/loboaula?layout=4&amp;mute=false&amp;width=560&amp;autoPlay=false&amp;height=340" style="border:0;outline:0" frameborder="0" scrolling="no"></iframe>
         </div>

        <div class="col-lg-4">
            <div class="panel-body">
            <form id="formChat" role="form">
                        <div class="form-group">
                            <font color="grey"><h4>Chats directos</h4>
                            <input type="hidden" class="form-control" id="user" name="user" placeholder="Enter User">
                            <a href="javascript:void(0)" onclick="javascript:chatWith('janedoe')">Juan</a><br>
                                     <a href="javascript:void(0)" onclick="javascript:chatWith('babydoe')">Pablo</a>  
                        </div>
                        <div class="form-group">                            
                            <div class="row">

                                <div id="conversation" style="height:200px; border: 1px solid #CCCCCC; padding: 12px;  border-radius: 5px; overflow-x: hidden;">
                                     
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">                
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Ingresa mensaje"  class="form-control" rows="3"></textarea>
                        </div>
                        <button id="send" class="btn btn-primary" >Enviar</button>                       
            </form> 
        </div>  
       </div>
 
     
       </div>
   
        

    <!-- Footer -->
      
 
      <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    <script>
        
            $(document).on("ready", function(){  
              registerMessages();
              $.ajaxSetup({"cache":false});
              setInterval("loadOldMessages()", 500);
              }); 

              var registerMessages = function(){
                $("#send").on("click", function(e){
                    e.preventDefault();
                    var frm = $("#formChat").serialize();
                    $.ajax({
                        type: "POST",
                        url: "register.php",
                        data: frm
                        }).done(function( info ){
                            $("#message").val("");
                            var altura = $("#conversation").prop("scrollHeight");
                    $("#conversation").scrollTop(altura);
                            console.log( info );
                        })
                });
              }  
              var loadOldMessages = function(){
                $.ajax({
                    type: "POST",
                    url: "conversation.php"
                }).done(function( info ){
                    $("#conversation").html( info );
                    $("#conversation p:last-child").css({"background-color": "lightgreen", "padding-botton": "20px"});
                    var altura = $("#conversation").prop("scrollHeight");
                    $("#conversation").scrollTop(altura);

                });

              }           
        </script>

   
</body>

</html>
  