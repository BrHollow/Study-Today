<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "study_today";

	$conn = mysqli_connect($host, $usuario, $senha, $bd) or die(mysqli_error());
	error_reporting(0);
 ?>