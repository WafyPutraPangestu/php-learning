<?php
require_once "data/programer.php";

$company = new company();
$company->programer= new programer("wafy");
$company->programer= new backendprogramer("noya");
$company->programer= new frontendProgramer("khanaiya");

sayHelloprogramer(new programer("wafy"));
sayHelloprogramer(new backendprogramer("noya"));
sayHelloprogramer(new frontendProgramer("wafy"));
?>