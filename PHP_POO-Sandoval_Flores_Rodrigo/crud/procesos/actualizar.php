<?php  
	require_once "../conexion.php";
	require_once "../metodosCrud.php";

	$nombre=$_POST['txtnombre'];
	$apellido=$_POST['txtapellido'];
	$id=$_POST['id'];

	$datos = array($nombre, $apellido, $id);
	$objeto = new metodos();

	if($objeto->actualizaDatosNombre($datos)==1){
		header("location:../index.php");
	}else{
		echo "Fallo al actualizar";
	}

?>