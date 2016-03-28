<?php
class femaleImc implements imcInterface
{
	// Translate text in optimal versions
	public function getImcStatus(){
		echo "IMC < 19 -> Falta de peso\n";
		echo "IMC >= 19 y <= 24 -> Peso normal\n";
		echo "IMC >= 25 y <= 30 -> Sobrepeso\n";
		echo "IMC >= 31 y <= 40 -> Obesidad\n";
		echo "IMC > 40 -> Obesidad morbida\n";
	}
}
?>