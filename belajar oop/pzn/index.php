<?php
require_once "data/person.php";
$person1 = new Person("wafy","ledug");

$person1->nama = "wafy";
$person1->umur = 20;
$person1->alamat ="ledug";
var_dump($person1);
?>

