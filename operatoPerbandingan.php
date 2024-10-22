<?php

$wapi = array(
    "nama" => "Wapi",
    "age" => 20,
);
$edo = array(
    "nama" => "wapi",
    "age" => "20",
);
$gedong = array(
    "nama" => "wapi",
    "age" => 20,
);
// nge bandingin value property dari name dari variable edo dan wapi
// var_dump($wapi["nama"] == $edo["nama"]);

// nge bandingin tipe data sekaligus value nya
// var_dump($wapi["age"] === $edo["age"]);

// kalo kurang dari sama dengan / lebih dari sama dengan itu itu tetep true karena kalo ada perbandingin < , > dan ada sama dengan nya, value nya itu termasuk
// var_dump($wapi["age"] <= $gedong["age"]);

$loggedIn = true;
$orang = false;

if($loggedIn){
    $orang = true;
    echo "Orang sudah login";
}else {
    $orang = false;
    echo "Orang belom login";
}






?>