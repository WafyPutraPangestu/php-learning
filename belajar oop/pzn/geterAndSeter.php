<?php
require_once "data/category.php";

$Category = new Category();
$Category->setName("handphone");
$Category->setExpensiv(true);

echo "nama : {$Category->getName()}". PHP_EOL;

echo "Expensiv : {$Category->isExpensiv()}". PHP_EOL;
?>