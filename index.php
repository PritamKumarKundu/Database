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
        <h1 class="text-center text-danger">PHP FORMS</h1>
            <form action="insert.php" method="POST" class="col-sm-6 offset-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter First Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Enter Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Enter Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required>
            </div>

            <button type="submit" class="btn btn-danger">Submit</button>
            <a href="read.php" class="btn btn-danger float-right">All Contact</a>
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