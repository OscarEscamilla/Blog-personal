<?php 
include_once('app/conexion.php');

include_once('app/repositorioUsuario.php');

Conexion :: abrir_conexion();
$usuarios = array();
$usuarios = repositorioUsuario :: obtenerDatos(Conexion::getConexion());

echo count($usuarios);

Conexion :: cerrar_conexion();
 ?>

<!DOCTYPE html>

<html lang="es"> 
    <head>
        <title>Bienvenidos a mi Blog personal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilos.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Este boton despliega la barra de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Mi blog</a>       
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Enlaces</a></li>
                        <li><a href="#">Acerca de</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Iniciar Sesion</a></li>
                        <li><a href="#">Registro</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
           <div class="jumbotron">
               <h1>Oscar Escamilla Luqueño</h1>
               <p>Blog dedicado para mostrar mis gustos e intereses</p>
           </div>
             
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" name="" class="form-control" placeholder="Buscar...">
                                    </div>
                                    <button class="form-control">Buscar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-filter" aria-hidden="true"></span>Filtro
                                </div>
                                <div class="panel-body"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultimas entradas
                        </div>
                        <div class="panel-body">
                            <?php
                                include_once('app/conexion.php');
                                Conexion :: abrir_conexion();
                                Conexion :: cerrar_conexion();
                            ?>

                            <p>Todavia no hay entradas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>    
    </body>
</html>
