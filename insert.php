<?php
include('dbconfig.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pass'];

    $insert = "INSERT INTO `userdata`( `user_name`, `user_email`, `user_password`) VALUES ('$name','$email','$pwd')";

    $result = $conn->query($insert);

    if($result == true){
        ?>
        <script>
            window.alert("Your Data has been successfully entered");
            window.location.assign('index.php');
        </script>
        <?php
    }else{
       ?>
       <script>
        window.alert("Failed to add Data");
       </script>
       <?php 
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Crud Web Application | Insert</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <form action="insert.php" method="POST">
        <h1 style="text-align: center;">PHP CRUD</h1>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                <br>
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                <br>
                <input type="password" name="pass" placeholder="Enter Your Password" class="form-control">
                <br>
                <input type="submit" class="btn btn-success" name="submit" value="Insert Data">
            </div>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>