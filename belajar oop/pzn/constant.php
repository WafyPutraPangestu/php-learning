<?php
require_once "data/person.php";

define("APPLICATIONS", "Belajar PHP OOP");
const APP_VERSION = "1.1.0";

echo APPLICATIONS . PHP_EOL;
echo APP_VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;
?>