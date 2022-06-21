<?php

use AliSoleimani\NSFW;

require __DIR__ . "/vendor/autoload.php";

$situation = NSFW::detect('img.png');

echo  $situation ? "Not Safe" : "Safe";