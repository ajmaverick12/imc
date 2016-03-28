<?php
class maleImc implements imcInterface
{
	// Translate text in optimal versions
	public function getImcStatus(){
		echo "IMC < 20 -> Falta de peso\n";
		echo "IMC >= 20 y <= 25 -> Peso normal\n";
		echo "IMC >= 26 y <= 30 -> Sobrepeso\n";
		echo "IMC >= 31 y <= 40 -> Obesidad\n";
		echo "IMC > 40 -> Obesidad morbida\n";
	}
}
?>