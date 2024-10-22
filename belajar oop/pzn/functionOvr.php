<?php
require_once "data/ketua.php";

$ketua = new Ketua();
$ketua->nama = "wafy";
$ketua->sayHello("Khanaiya");

$wakilKetua = new wakilKetua();
$wakilKetua->nama = "noya";
$wakilKetua->sayHello("Khanaiya");



?>