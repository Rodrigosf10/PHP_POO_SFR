<?php  
	class Metodos{
		public function mandarColor($valor){
			if($valor==1) {
				return "Rojo";
			}else if($valor==2){
				return "Verde";
			}else if($valor==3){
				return "Azul";
			}
		}

		public function darDeAltaElColor($tipodecolor){
			return self::mandarColor($tipodecolor);
		}
	}

	$objeto = new Metodos();
	echo $objeto->mandarColor(1);
	echo "<br>";
	echo $objeto->mandarColor(2);
	echo "<br>";
	echo $objeto->mandarColor(3);
	echo "<br>";
	echo "<hr>";
?>