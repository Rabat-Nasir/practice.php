<?php
$field_Error_Name = "";
$field_Error_Company = "";
$field_Error_Password = "";
$field_Error_Comment = "";
$field_Error_Gender = "";
if (isset($_POST['submit'])) {
  if (empty($_POST['username'])) {
    $field_Error_Name = "This field cannot be empty";
  } else {
    $name = sanitize_data($_POST['username']);
    if (preg_match("/^[a-zA-Z-]*$/", $name)) {
      $field_Error_Name = "Only Letters and Whitespaces are allowed";
    }
  }

  if (empty($_POST['password'])) {
    $field_Error_Password = "This field cannot be empty";
  } else {
    $password = sanitize_data($_POST['password']);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
      $field_Error_Password ='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    } else {
      $field_Error_Password = "";
    }
  }

  if (empty($_POST['company'])) {
    $field_Error_Company = "This field cannot be empty";
  } else {
    $company = sanitize_data($_POST['company']);
  }

  if (empty($_POST['comment'])) {
    $field_Error_Comment = "This field cannot be empty";
  } else {
    $comment = sanitize_data($_POST['comment']);
  }

  if (empty($_POST['gender'])) {
    $field_Error_Gender = "This field cannot be empty";
  } else {
    $gender = sanitize_data($_POST['gender']);
  }

?>
  <script>
    alert("Your Data is sanitized in appropiate format");
  </script>
<?php
}
function sanitize_data($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data, ENT_QUOTES);
  return $data;
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- tstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<html lang="en">
  <head>
    <title>Title</title>
     <!--Required meta tags--> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS--> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <center><h1>Validation form.</h1></center>

    <div class="container">
        <form action="validation.php" method= "POST">
            <div class="form-group">
                Name: <input class="form-control" type="text" name="username">
                <input type="text" class="form-control" name="username">
        <span class="error-msg"><?php echo ($field_Error_Name);  ?></span>
        <br>
                <br>
            
                Password: <input class="form-control" type="password" name="password">
                <input type="text" class="form-control" name="password">
        <span class="error-msg"><?php echo ($field_Error_Password);  ?></span>
        
                <br>
                <br>
                Company: <input  class="form-control"  type="text" name="company">
                <input type="text" class="form-control" name="company">
        <span class="error-msg"><?php echo ($field_Error_Company);  ?></span>
                <br>
                <br>
                Comment: <textarea  class="form-control"  name="comment"  cols="40" rows="5"></textarea>
                <textarea type="text" cols="20" rows="5" class="form-control" name="comment"></textarea>
        <span class="error-msg"><?php echo ($field_Error_Comment);  ?></span>
                <br><br>
                Gender:
                 <input type="radio" name="gender" value="female">Female
                 <input type="radio" name="gender" value="Male">Male 
                 <input type="radio" name="gender" value="other">Other 
    
                <br><br>
                <input   type="sumit" name="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>
    <?php
  echo "<h2>Your Entered Data</h2>";
  echo ($name);
  echo ("<br>");
  echo ($password);
  echo ("<br>");
  echo ($company);
  echo ("<br>");
  echo ($comment);
  echo ("<br>");
  echo ($gender);
  echo ("<br>");

     ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
 

         

