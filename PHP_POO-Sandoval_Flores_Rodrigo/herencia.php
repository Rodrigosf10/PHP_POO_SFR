<?php
	// La herencia es obtner todas las propiedades de una clase a otra, mediante la palabra reservada "extends"

	class clasePadre{
		public function metodoPadre(){
			return "Hola desde la Clase Padre";
		}
		public function metodo1(){
			return "Este es el metodo Padre";
		}
	}

	class claseHijo extends clasePadre{
		public function metodoHijo(){
			return parent::metodo1();
		}
		public function metodo1(){
			return "Este es el metodo Hijo";
		}
	}

	$objeto = new claseHijo();
	echo $objeto->metodoPadre(); 
	echo "<br>";
	echo $objeto->metodoHijo();

	// Instancia rapida o de doble puntuacion
	//echo claseHijo::metodoHijo();
	
?>