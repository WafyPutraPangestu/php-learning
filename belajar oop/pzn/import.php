<?php
require_once "data/masalah.php";
require_once "data/pertolongan.php";

use Data\one\Conflict;
use function Helper\HelpME;
use const Helper\APPLICATION;

$Conflict1 = new Conflict();
$Conflict2 = new \Data\one\Conflict();

HelpMe();

echo APPLICATION . PHP_EOL;

?>