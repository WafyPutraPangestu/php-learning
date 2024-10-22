<?php
$first = [
    "FirstName" => "wafy"
];
$last = [
    "LastName" => "putra"
];

$full = $last + $first;
var_dump($full);
$full = $first + $last;
var_dump($full);

// kode itu berjalan dari atas kebawah bisa juga dibilang singletrade 

