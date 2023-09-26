<?php

$dbhost = "localhost";
$dbuser = "id21313537_root";
$dbpass = "@Platform21";
$dbname = "id21313537_crud";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>
