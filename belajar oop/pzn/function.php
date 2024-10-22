<?php
require_once "data/person.php";
$wafy = new  Person("wafy","ledug");
$wafy->nama = "wafy";
$wafy->sayHello("putra");

$noya = new  Person("noya","ciledug");
$noya->nama = "noya";
$noya->sayHello(null);


$wafy->info();
$noya->info();

$contohPakeKonstruktor = new Person("gedong","gang famili");
$contohPakeKonstruktor->echoKonstruktorProperti();

?>