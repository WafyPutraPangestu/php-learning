<?php
require_once "data/masalah.php";
require_once "data/pertolongan.php";

$masalah1 = new Data\one\Conflict();
$masalah2 = new Data\two\Conflict();

echo Helper\APPLICATION. PHP_EOL;
Helper\HelpMe() . PHP_EOL;
?>