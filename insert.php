<?php

require_once('db.php');
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$email=$_REQUEST['email'];

$sql="INSERT INTO information(first_name, last_name, email)
            VALUES('$first_name', '$last_name', '$email')";

$result=mysqli_query($connect, $sql) or die(mysqli_error($connect));
if ($result == TRUE)
{
    header("location: read.php");
}
else
{
    echo "Data Not Inserted.";
}

?>