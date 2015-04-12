<?php

use Pimple\Container;

$di = new Container();


$di["pdo"] = include __DIR__."/services/pdo.php";
$di["view"] = include __DIR__."/services/view.php";


return $di;