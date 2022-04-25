<?php
$dbhos="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_smaple";

if(!$con=mysqli_connect($dbhos,$dbuser,$dbpass,$dbname))
{
    die("failed to conect");
}