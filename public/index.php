<?php

require_once "../vendor/autoload.php";

$sentence = new App\Wcs\Hello();
echo $sentence->talk();
