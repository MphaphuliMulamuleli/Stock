<?php

$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dabname = "stock";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dabname))
{
    die("Failed to connect!");
}