<?php

require_once('db.php');
$sql="SELECT * FROM information";
$result=mysqli_query($connect, $sql);

/*
echo '<pre>';
print_r($result);
exit();
*/

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
        <h1 class="text-center text-danger">ALL CONTACT</h1>
        <a href="index.php" class="btn btn-danger">Add New</a>
            <table class="table table-dark table-bordered text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
                <tr>
                <th scope="row"> <?php echo $row['id']; ?> </th>
                <td> <?php echo $row['first_name']; ?> </td>
                <td> <?php echo $row['last_name']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>  ||
                    <a id="delete" data-toggle="modal" data-target="#emampleModal" href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>  ||
                    <a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Show</a>
                </td>
                </tr>
            <?php
            }
            ?>
            </tbody>

            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            swal({
                title: "Attention",
                text: "* Are You Want to Delete *",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete)=>{
                if(willDelete){
                    window.location.href=link;
                }
                else{
                    swal("Not Deleted");
                }
            });
        });
    </script>
  </body>
</html>