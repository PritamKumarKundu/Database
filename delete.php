<?php

require_once('db.php');
$id=$_REQUEST['id'];
/*
echo $id;
*/
$delete="DELETE FROM information WHERE id=$id";
$result=mysqli_query($connect, $delete);
if ($result == 'TRUE')
{
    header("location: read.php");
}
else
{
    echo "Data Not Deleted.";
}

?>