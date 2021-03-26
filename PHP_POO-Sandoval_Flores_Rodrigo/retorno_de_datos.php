<?php  

	class retornoDeDatos{
		/*
		Los tipos de datos mas importantes al retornar
		- String
		- Entero
		- Arreglo
		- JSON o json
		*/

		public function retornoDeString($edad){
			if ($edad>18){
				return "Es mayor de edad";
			}else{
				return "No es mayor de edad";
			}
		}

		public function retornoDeEnteros($valor){
			if ($valor>0) {
				return 1;
			} else {
				return 0;
			}
		}

		public function retornaArreglo($ciclos){
			$datos=array();
			for ($i=0; $i<$ciclos; $i++) { 
				$datos[$i]=$i;
			}
			return $datos;
		}

		public function retornoDeJson(){
			$arreglo2=array("hdd"=>500, "Pantalla"=>21, "RAM"=>8);
			return json_encode($arreglo2);
		}
	}

	$cadena = new retornoDeDatos();
	var_dump($cadena->retornoDeString(20));
	echo "<br>";
	echo "<hr>";
	var_dump($cadena->retornoDeEnteros(1));
	echo "<br>";
	echo "<hr>";
	var_dump($cadena->retornaArreglo(10));
	echo "<br>";
	echo "<hr>";
	var_dump($cadena->retornoDeJson());
	echo "<hr>";
?>