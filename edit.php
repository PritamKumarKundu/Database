<?php

require_once('db.php');
$id=$_REQUEST['id'];
$edit="SELECT * FROM information WHERE id=$id";
$result=mysqli_query($connect, $edit);
$row=mysqli_fetch_assoc($result);

?>

<?php

if (Isset($_REQUEST['update']))
{
    $id=$_REQUEST['id'];
    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];
    $email=$_REQUEST['email'];

    $update="UPDATE information SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$id";
    $result=mysqli_query($connect, $update);
    if ($result == TRUE)
    {
        header("location: read.php");
    }
    else
    {
        echo "Not Update";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body>
    
    <div class="container">
        <div class="jumbotron">
        <h1 class="text-center text-danger">EDIT FORMS</h1>
            <form action="" method="POST" class="col-sm-6 offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter First Name</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name']; ?>" placeholder="Enter First Name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Enter Last Name</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name']; ?>" placeholder="Enter Last Name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Enter Email Address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter Email Address" required>
            </div>

            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
            <button type="submit" name="update" value="update" class="btn btn-danger">Update</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>