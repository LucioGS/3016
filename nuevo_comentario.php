<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	
	include "modelos/bbdd/perfil.php";
	include "vistas/nuevo_comentario.htm"; 

?>
