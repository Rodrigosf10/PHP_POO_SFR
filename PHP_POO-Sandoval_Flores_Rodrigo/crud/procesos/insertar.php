<?php
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombre=$_POST['txtnombre'];
	$apellido=$_POST['txtapellido'];

	$datos = array($nombre, $apellido);
	$objeto = new metodos();
	if($objeto->insertarDatosNombres($datos)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al agregar";
	}
?>