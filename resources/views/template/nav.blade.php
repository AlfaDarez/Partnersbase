<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
       <link rel="icon" href="/dna.ico" type="image/x-icon">


        <title>Partners</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>


 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">MI ADN Fit</a>
                </div>

                <button type="button" class="navbar-toggle"  id="barra" data-toggle="collapse" data-target=".navbar-collapse">
                   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fas fa-dna"></i> Mi ADN México</a></li>
                    <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Academy</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">

                        <!-- Centro de Notificasiones  -->
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div class="row">
                                         <img class="col-md-3" src="http://www.zayedhotel.com/addons/default/themes/yoona/img/user.jpg" width="100px" height="50px">
                                        <span class="col-md-9"> El Afedo esta Calmado </span>
                                         
                                    </div>
                                </a>
                            </li>



                          



                            <!--
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            -->
                        </ul>

                    </li>
                    <!--Menu  de  usuario  Personalizado -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Jose Alfredo <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>Mi Perfil</a>
                            </li>

                              <li><a href="{{ route('user-menu') }}"><i class="far fa-eye fa-fw"></i> Ver Como Partner</a>
                            </li>
                           
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a>
                            </li>

                          

                            

                            <li class="divider"></li>
                            <li><a href="#"> <i class="fas fa-sign-out-alt"></i> Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Menu Lateral Personalizado -->

                <div class="navbar-default sidebar" role="navigation" >
                    <div class="sidebar-nav navbar-collapse" id="menu">
                    <ul class="nav" id="side-menu">
                            <br>
                    <div >
                     <li >
                      
                     <div class="" > <center> <img src="http://www.zayedhotel.com/addons/default/themes/yoona/img/user.jpg" width="150px"> </center></div>
                            <center><h4> José Alfredo </h4></center>
                        
                        </li>
                    </div>

                          
                            <li> <!-- Menu  Principal  agregar la clase  active al menu donde esta actualmente-->
                                <a href="{{route('main')}}" class=""> <i class="fas fa-desktop"> </i> Menu Principal </a> 
                            </li>
                            <li>
                                <a href="{{route('menu-partners')}}" class="" ><i class="fas fa-users"></i>  Partners</a>
                            </li>
                            <li>
                                <a href="{{route('menu-admin')}}" class="" > <i class="fas fa-users-cog"></i> Administradores </a>
                            </li>
                            <li>
                                <a href="{{route('menu-biblioteca')}}" class=""><i class="fas fa-book"></i>  Biblioteca </a>
                            </li>

                             <li>
                                <a href="{{route('menu-tienda')}}" class="" > <i class="fas fa-store-alt"></i>  Tienda</a>
                            </li>

                            <li>
                                <a href="{{route('estadisticas')}}" class=""><i class="fas fa-chart-pie"></i>  Estadisticas</a>
                            </li>

                            <li>
                                <a href="{{route('reportes')}}" class=""> <i class="far fa-file-alt"></i> Reportes</a>
                            </li>

                            <li>
                                <a href="{{ route('menu_configuracion') }}"> <i class="fas fa-wrench"></i> Configuraciones  </a>
                            </li>

                         

                        </ul>
                        <br>
                           
                                  
                    </div>
                </div>

            </nav>




</body>
 <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
   
        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>
        <!-- Link a FontIcons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</html>


<script type="text/javascript">
    document.getElementById('barra').onclick=function() {
    
        document.getElementById('menu').classList.add("total");
        document.getElementById('avatar').classList.add('oculto'):

         };
         
</script>

<style type="text/css">
    .total{
        height: 700px;

    }
    .oculto{
        visibility: collapse;
    }


</style>





