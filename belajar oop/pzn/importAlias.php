<?php
require_once "data/masalah.php";
require_once "data/pertolongan.php";

use Data\one\Conflict as Conflict1;
use Data\two\Conflict as Conflict2;
use function Helper\HelpME as help;
use const Helper\APPLICATION as APP;

$Conflict1 = new Conflict1();
$Conflict2 = new \Data\one\Conflict();

Help();

echo APP . PHP_EOL;

?>