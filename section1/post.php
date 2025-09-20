<?php
  if(isset($_POST["email"])){    
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";
    $email = htmlspecialchars($email);
    $password = filter_var($password,FILTER_SANITIZE_SPECIAL_CHARS);

    echo $email . " - ". $password."<br/>";
    if($email=="nhhai@ued.udn.vn" && $password=="asd123"){
      echo "Welcome $email";
    }
    else{
      echo "Incorrect login";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Login to your account</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div>
      <label for="email">Your email: </label>
      <input type="text" name="email">
    </div>
    <div>
      <label for="password">Your password: </label>
      <input type="password" name="password">
    </div>
    <input type="submit" value="Submit"/>
  </form>
</body>
</html>