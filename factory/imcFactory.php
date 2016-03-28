<?php
class imcFactory
{
	public static function getImcSex($sexPerson)
	{
		switch($sexPerson) {
			case 'H':
				return new maleImc();
				break;
			case 'M':
				return new femaleImc();
				break;
			default:
				return new argumentError();
				break;
		}
	}
}
?>