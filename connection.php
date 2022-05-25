<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbnme = "mytutorloginregis";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbnme))
{

    die("failed to connect!");
}