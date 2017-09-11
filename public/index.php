<?php
// FULL ERROR REPORTING
error_reporting(E_ALL);
ini_set('display_errors',1);

include "laravel/BladeOne.php";

Use eftec\bladeone;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
define("BLADEONE_MODE",0); // (optional) 1=forced (test),2=run fast (production), 0=automatic, default value.
$blade=new bladeone\BladeOne($views,$cache);
echo $blade->run("_layouts.master",array("variable1"=>"value1"));

?>
