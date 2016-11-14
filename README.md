# Simple PHP Class with Instagram effects for photos
Preview:
![alt text][logo]

[logo]: https://github.com/twelvee/instagram_effects/123.png "Preview"

Simple to use, just use /examples/*.php files like photo with your photo links.

Just like this:
/examples/aqua.php

```<?php
require_once("../classes/Filter.php");
$image = imagecreatefromjpeg(isset($argv[1]) ? $argv[1] : "{HERE YOUR IMAGE}");
$filter= new Filter($image);
$effects = $filter->aqua();
header("Content-type: image/png");
imagepng($image);
imagedestroy($image);
