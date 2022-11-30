<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La casa de la abuela</title>
    <!-- importación Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="text-center">
      <img src="<?php echo base_url(); ?>/assets/images/abuela.png" alt="Logo" height="100px">
    </div>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="<?php echo site_url(); ?>">Principal</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Pedidos<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('pedidos/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('pedidos/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Platos<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('platos/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('platos/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Empleados<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('empleados/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('empleados/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Mesas<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('mesas/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('mesas/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Promociones<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('promociones/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('promociones/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-expanded="false">Proveedores<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo site_url('proveedores/index');?>">Listado</a></li>
              <li><a href="<?php echo site_url('proveedores/nuevo');?>">Nuevo</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
