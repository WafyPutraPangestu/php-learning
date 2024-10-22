<!-- operator penugasan aritmatika-->
<?php
$total =0;

$fruit = 10000;
$chicken = 8000;
$juice = 5000;

// $total = $total + $fruit;
// $total = $total + $chicken;
// $total = $total + $juice;

// lebih singkatnya gini

$total += $fruit;
$total += $chicken;
$total += $juice;

var_dump($total);