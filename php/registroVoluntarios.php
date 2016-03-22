<?php
	require_once("../regForm.html");
	$nombres = $_POST["nombresVoluntario"];
	$apellidoPat = $_POST["apellidoPatVoluntario"];
	$apellidoMat = $_POST["apellidoMatVoluntario"];
	$matricula = $_POST["matriculaVoluntario"];
	$email = $_POST["emailVoluntario"];
	$celular = $_POST["celularVoluntario"];
	$carrera = $_POST["carreraVoluntario"];
	$semestre = $_POST["semestreVoluntario"];

	echo $nombres;
	echo "Hola";
?>