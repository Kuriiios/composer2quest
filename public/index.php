<?php 

require '../vendor/autoload.php';

use Wild\App\Hello; 

$hello = new Hello();
echo $hello->talk();