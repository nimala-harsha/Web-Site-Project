<?php

$usrNme="root";
$pwd="";
$hostNm="localhost";
$db="empdb";
$chr="utf8mb4";
$attr="mysql:host=$hostNm;dbname=$db;charset=$chr";

$opts=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,

    
];

?>

