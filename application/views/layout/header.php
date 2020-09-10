<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A/D Maranata</title>
      <!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="src/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="src/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link rel="stylesheet" type="text/css" href="src/js/node_modules/chart.js/dist/Chart.css">

</head>
  	<nav class="teal darken-3" role="navigation">
    	<div class=" navbar-wrapper container">
			<a id="logo-container" href="#" class="brand-logo">
				<i class="material-icons">home</i>	
				MARANATA
			</a>
			<!-- Dropdown opciones -->
			<ul id="opciones" class="dropdown-content">
				<li><a href="#!">Resultados</a></li>
				<li><a href="welcome/logout"><i class="material-icons left">exit_to_app</i> Salir</a></li>
			</ul>
			<!-- Dropdown departamentos -->
			<ul id="departamentos" class="dropdown-content">
				<li><a href="fraternidad">Fraternidad</a></li>
				<li><a href="concilio">Concilio</a></li>
				<li><a href="jovenes">Jovenes</a></li>
			</ul>
      		<ul class="right hide-on-med-and-down">
				<li><a href="<?php echo base_url() ?>diaconos">Diaconos</a></li>
				<li><a href="diaconizas">Diaconizas</a></li>
				<li><a class="dropdown-trigger" href="#!" data-target="departamentos">Departamentos<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a href="adolescentes">Adolecentes</a></li>
				<li><a href="escuela">Escuela Biblica</a></li>	
				<!-- Dropdown Trigger -->
				<li><a class="dropdown-trigger" href="#!" data-target="opciones">Opciones<i class="material-icons right">arrow_drop_down</i></a></li>
   			
      		</ul>
			<ul id="nav-mobile" class="sidenav">
				<li><a href="<?php echo base_url() ?>diaconos">- Diaconos</a></li>
				<li><a href="diaconizas">- Diaconizas</a></li>
				<li><a href="fraternidad">- Fraternidad</a></li>
				<li><a href="concilio">- Concilio</a></li>
				<li><a href="jovenes">- Jovenes</a></li>
				<li><a href="adolescentes">- Adolecentes</a></li>
				<li><a href="escuela">- Escuela Biblica</a></li>
				<li><a href="resultados"><i class="material-icons left">insert_chart</i> Resultados</a></li>
				<li><a href="welcome/logout"><i class="material-icons left">exit_to_app</i> Salir</a></li>

      		</ul>
      		<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    	</div>
  	</nav>
	<div class="section no-pad-bot" id="index-banner">
    	<div class="container">
			<h2  class="header center orange-text "><?= $this->session->userdata('userName'); ?></h2>
    	</div>
	</div>