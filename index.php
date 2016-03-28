<?php
require_once('interface/imcInterface.php');
require_once('class/maleImc.php');
require_once('class/femaleImc.php');
require_once('class/argumentError.php');
require_once('factory/imcFactory.php');

$imcFactory = new imcFactory();

// The value in optimal versions will be collected from the command line.
// By the moment, I have hardcoded value.
// You can prove with H (male), M (female) and other values (argument error).
$imc = $imcFactory->getImcSex('H');

$imc->getImcStatus();
?>