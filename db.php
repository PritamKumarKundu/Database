<?php

$servername='localhost';
$username='root';
$password='';
$dbname='php';

$connect=mysqli_connect($servername, $username, $password, $dbname);
if ($connect == 'FALSE')
{
    die("Error Database Connecton.".mysqli_connect_error());
}

/*
else
{
    echo "Database Connection Successfully.";
}
*/

?>