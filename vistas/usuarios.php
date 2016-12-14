<?php

	//ini_set('error_reporting', E_ALL|E_STRICT);
	//ini_set('display_errors', 1); 

	include("../controller/muestra_pagina.php");

	$muestra_usuarios = new mostrar();

	//---------------------------------------------------------
	$pagina = "cont_usuarios.php";
	$scripts = array('cont_usuarios.js');
	$id_modulo = 13;
	//---------------------------------------------------------

	$muestra_usuarios->mostrar_pagina_scripts($pagina,$scripts,$id_modulo);

 ?>