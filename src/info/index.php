<?php

$width = 7;
$height = 6;
$strategy = array("Smart","Random");

$json_parameters = json_encode(array('width' => $width, 'height' => $height,"strategies" => $strategy));

echo $json_parameters;
//creates a board to use


?>