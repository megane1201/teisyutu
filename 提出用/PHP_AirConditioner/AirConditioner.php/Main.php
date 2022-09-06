
<?php

require "AirConditioner.php";

$airConditioner = new AirConditioner(25,5);

$airConditioner->cooling();
$airConditioner->temperatureplus();
$airConditioner->powerplus();
$airConditioner->showStatus();



?>