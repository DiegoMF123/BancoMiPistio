<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Usuarios por punto de atención</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Usuario.</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/Ico.ico">

        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">

         <link href="<?php echo base_url(); ?>assets/css/demo/jquery-steps.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/demo/jasmine.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/plugins/pace/pace.min.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>

  </head>
  <body>
    <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">

        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                        </li>

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <li class="hidden-xs" id="toggleFullscreen">
                            <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                            <span class="sr-only">Toggle fullscreen</span>
                            </a>
                        </li>

                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                              <!--Abrimos llaves de php para poder llamar el tipo de variable session PARA llamar
                               el campo nombre que es el que se muestra en la vista, "parte superior derecha donde indica
                               el nombre del usuario que se ha logeado"-->

                                <div class="username hidden-xs"><?php echo $_SESSION["nombre"]; ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right with-arrow">

                                <ul class="head-list">
                                    <li>
                                      <!-- Boton que sirve para poder redireccionar a la vista del login, cuando el usuario quiera salir, en este caso la funcion esta en el controlador
                                    welcome y la funcion se llama salir -->
                                        <a href="<?php echo base_url(); ?>index.php/welcome/salir"> <i class="fa fa-user fa-fw fa-lg"></i> Salir</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </header>

        <div class="boxed">

            <div id="content-container">
                <div class="pageheader hidden-xs">
                    <h3><i class="fa fa-home"></i>Usuarios por punto de atención</h3>
                </div>

                <div id="page-content">
                   <div class="row">
                     <div class="col-md-1">

                     </div>
                     <div class="col-md-10">
                       <div class="panel">
                           <div class="panel-heading">
                               <h3 class="panel-title">Listado de usuarios del sistema ligados a un punto de atención</h3>
                           </div>
                           <br>
                           <!-- Se abren llaves php para poder realizar un if con codigo php, es este caso declaramos una variable
                         llamada "response" en la cual le estamos indicando que si es == 1, nos mostrara un mensaje, en este caso
                       si los datos se actualizan y hacen bien su proceso en el controlador Pda y en el respectivo modelo. -->
                           <?php if ($response =="1") {
                             echo "<div class=\"alert alert-success fade in\" role=\"alert\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">
                                   Se modificaron correctamente los datos del usuario del punto de atención
                                 </div>";
                           } ?>
                           <form class="" action="" method="GET">

                               <div class="">

                                   <div class="col-md-3 col-xs-12">

                                       <label for=""> Seleccione la Región a buscar</label>


                                   </div>

                                     <div class="col-md-3 col-xs-12">
                                       <select class="form-control" name="region">
                                         <option value="" hidden selected >Seleccione una opción</option>
                                         <!-- Para poder llamar los datos de la base de datos, que en este caso son las regiones
                                        abrimos llaves php y realizamos un nuevo foreach que en este caso le declaramos una variable que es la que
                                      vamos a llamar en el controlador para poder mandarselos a nuestro modelo y que en el modelo nos retorne los datos
                                    que necesitamos, luego de as declaramos otra variable que es la que vamos a usar practicamente en nuestra vista para poder
                                    mostrar los datos o el dato que nos devuelva nuestra consulta del modelo-->
                                    <?php foreach ($tiporegion as $tiporegion) {
                                      // code...
                                    ?>
                                    <!--Abrimos llaves de php para poder llamar los datos que necesitamos para poder mostrar los valores que en este caso
                                  sera la el nombre de la region, pero para ello necesitamos el id y el nombre de la region que se seleccione segun el ID-->
                                      <option value="<?=$tiporegion->idRegion  ?>"><?= $tiporegion->region ?></option>


                                <?php    } ?>
                                </select>

                                                     </div>

                                   <div class="col-md-4">



                                     <input type="submit" value="Filtrar" class="btn btn-primary btn-block">


                                   </div>

                               </div>

                           </form>
                                             <br>
                                             <br>

                           <div class="panel-body">

                             <div class="btn-group">
                               <!-- Boton que direcciona a la vista para agregar un nuevo punto de atención, lo llamamos por medio del controlador userspda y usamos la funcion nuevo para poder
                             mostrar la vista-->
                                <a href="<?php echo base_url(); ?>index.php/userspda/nuevo" class="btn btn-default"><i class="fa fa-plus"> Nuevo</i></a>


                             </div>
                             <br>
                             <br>
                             <table  class="table table-striped table-bordered">
                                 <thead>
                                     <tr>
                                            <!--El nombre de los campos que se van a mostrar en la vista-->
                                         <th>ID</th>

                                         <th>Correo</th>
                                          <th>Nombre</th>
                                         <th>Cargo</th>
                                         <th>Punto de atención</th>
                                         <th>Región</th>
                                         <th>Estado</th>


                                     </tr>
                                 </thead>
                                 <tbody>
                                   <!--abrimos llaves php para poder llamar los datos que queremos mostrar en nuestra vista
                                 de los puntos de atención existentes, comenzamos un foreach y en este caso declaramos una variable
                               llamada datos que es la que llamaremos en nuestro controlador userspda en la funcion index, luego del as
                             tenemos otra variable dato que es la que vamos a usar para poder mandar a llamar los campos que queremos mostrar de la base de datos por
                           parte de nuestro modelo igualmente en la funcion index -->
                                   <?php foreach ($usuarios as $usuario) {
                                     // code...

                                     ?>
                                     <tr>
                                        <td><?= $usuario->idUsuarios_pda  ?></td>
                                        <td><?=  $usuario->Correo?></td>
                                         <td><?= $usuario->Nombre  ?></td>
                                         <td><?= $usuario->Nombre_Cargo  ?></td>
                                        <td><?=  $usuario->Nombre_Punto?></td>
                                         <td><?= $usuario->region  ?></td>
                                        <td><?=  $usuario->NombreEstado ?></td>

                                         <td>
                                           <div class="btn-group">
                                             <!-- Boton editar, llamamos nuestro controlador userspda con la funcion update y le mandamos el id del punto de atención que queremos modificar para que nos muestre
                                           los datos del punto de atención que queremos editar-->
                                             <a href="<?php echo base_url(); ?>index.php/userspda/update?id=<?= $usuario->idUsuarios_pda  ?>"  class="btn btn-default"><i class="fa fa-edit"></i></a>
                                           </div>
                                         </td>
                                     </tr>
                                     <?php          } ?>


                                 </tbody>
                             </table>

                           </div>
                         </div>

                   </div>

                    <div class="col-md-1">

                    </div>

                </div>

            </div>

            <nav id="mainnav-container">

                <div class="navbar-header">
                    <a href="" class="navbar-brand">

                          <i><img src="<?php echo base_url(); ?>assets/img/bmps.png" width="60"> <font size="5" face="georgia">Menú BMP</font></i>
                    </a>
                </div>

                <div id="mainnav">

                            <div id="mainnav-menu-wrap">

                            <div class="nano">

                                <div class="nano-content">

                                    <ul id="mainnav-menu" class="list-group">


                                        <li class="list-header">Navegacion</li>


                                        <li> <a href="<?php echo base_url(); ?>index.php/welcome/admin"> <i class="fa fa-home"></i> <span class="menu-title"> Inicio </span> </a> </li>

                                        <li class="list-header">Prueba</li>

                                        <li>

                                            <a href="#">

                                            <i class="fa fa-table"></i>

                                            <span class="menu-title">Principal</span>

                                            <i class="arrow"></i>

                                            </a>

                                            <!--Submenu-->

                                            <ul class="collapse">

                                                <li><a href="<?php echo base_url(); ?>index.php/welcome"><i class="fa fa-caret-right"></i>Pantalla Principal</a></li>



                                            </ul>

                                        </li>

                                        <li>

                                            <a href="#">

                                            <i class="fa fa-briefcase"></i>

                                            <span class="menu-title">Quejas</span>

                                            <i class="arrow"></i>

                                            </a>

                                            <!--Submenu-->

                                            <ul class="collapse">

                                                <li><a href="<?php echo base_url(); ?>index.php/quejasauto"><i class="fa fa-caret-right"></i>Listado de quejas</a></li>

                                                  <li><a href="<?php echo base_url(); ?>index.php/IngQueja"><i class="fa fa-caret-right"></i>Ingreso Quejas por Mal Servicio o servicio no conforme</a></li>

                                            </ul>

                                        </li>

                                        <li>

                                            <a href="#">

                                            <i class="fa fa-briefcase"></i>

                                            <span class="menu-title">Configuración</span>

                                            <i class="arrow"></i>

                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">

                                                <li><a href="<?php echo base_url(); ?>index.php/users"><i class="fa fa-caret-right"></i>Asignar nuevos Usuarios</a></li>
                                                <li><a href="<?php echo base_url(); ?>index.php/userspda"><i class="fa fa-caret-right"></i>Asignar Usuarios por pda</a></li>



                                            </ul>
                                        </li>

                                        <li>

                                            <a href="#">

                                            <i class="fa fa-edit"></i>

                                            <span class="menu-title">Prueba</span>

                                            <i class="arrow"></i>

                                            </a>

                                            <!--Submenu-->

                                            <ul class="collapse">

                                                   <li><a href=""><i class="fa fa-caret-right"></i>Prueba</a></li>


                                            </ul>

                                        </li>

                                        <li>

                                            <a href="#">

                                            <i class="fa fa-envelope-o"></i>

                                            <span class="menu-title">Prueba</span>

                                            <i class="arrow"></i>

                                            </a>

                                            <!--Submenu-->

                                            <ul class="collapse">

                                                   <li><a href=""><i class="fa fa-caret-right"></i>Prueba</a></li>



                                            </ul>

                                        </li>





                                                                                <li>

                                                                                  <a href="#">

                                                                                  <i class="fa fa-briefcase"></i>

                                                                                  <span class="menu-title">Indicadores</span>

                                                                                  <i class="arrow"></i>

                                                                                  </a>

                                                                                    <!--Submenu-->

                                                                                    <ul class="collapse">

                                                                                      <li><a href=""><i class="fa fa-caret-right"></i>Prueba</a></li>

                                                                                        <li><a href=""><i class="fa fa-caret-right"></i>Prueba</a></li>



                                                                                    </ul>

                                                                                </li>








                                    </ul>

                                </div>

                            </div>

                        </div>

                </div>
            </nav>

        </div>

        <footer id="footer">

            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>
                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>

            <div class="hide-fixed pull-right pad-rgt">Actualmente v1.0</div>

            <p class="pad-lft">&#0169; 2020 Sistema Quejas "Banco mi pistio S.A"</p>
        </footer>

        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>

    </div>


   <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/fast-click/fastclick.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/metismenu/metismenu.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/parsley/parsley.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/jquery-steps/jquery-steps.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/masked-input/bootstrap-inputmask.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/bootbox/bootbox.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/screenfull/screenfull.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/demo/ui-modals.js"></script>
  </body>
</html>
