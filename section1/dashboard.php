<?php
session_start();
if(isset($_SESSION["email"])){
  $email = $_SESSION["email"];
  echo "Welcome: $email<br/>";
  echo "<a href='logout.php'>Log out</a>";
}
else{
  echo "You are a guest visitor. Please login!</br>";
  echo "<a href='session.php'>Back to Login</a>";
}
?>