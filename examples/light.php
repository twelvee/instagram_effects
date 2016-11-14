<?php
require_once("../classes/Filter.php");

$image = imagecreatefromjpeg(isset($argv[1]) ? $argv[1] : "example.jpg");
$filter= new Filter($image);

$effects = $filter->light();

header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
