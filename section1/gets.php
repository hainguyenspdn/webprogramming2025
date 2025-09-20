<?php
  $name = $_GET['name'] ?? "";  //coalescence operator
  $age = $_GET['age'] ?? "";
  echo "Name: $name<br/>";
  echo "Age: $age<br/>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
    <div>
      <label for="name">Your name: </label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="age">Your age: </label>
      <input type="text" name="age">
    </div>
    <input type="submit" value="Submit"/>
  </form>
</body>
</html>