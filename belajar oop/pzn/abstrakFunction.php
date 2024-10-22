<?php
require_once "data/animal.php";

use Data\{Animal,cat,Dog};

$cat = new cat();
$cat->nama = "surti";
$cat->run();

$Dog = new Dog();
$Dog->nama = "bagas";
$Dog->run();

?>