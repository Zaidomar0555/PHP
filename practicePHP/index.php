

<?php
 //since Berry.php inherited Fruit.php, i dont have to include Fruit.php in index.
 include 'Berry.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/style.css">
<script type="text/javascript" src="./js/main.js"></script>



    <title>Home</title>
</head>
<body>

  <h1 id="h1ID"></h1>
  <h1 id="idd"></h1>

<?php

    // $berry = new Berry('berry','blue');
    //
    // // $fruit->setName('apple');
    // // $fruit->setColor('red');
    //
    // echo "The fruit you picked is: " .$berry->getName(). " and the color of it is: " .$berry->getColor();
    // echo "<br>";
    // $berry->sendMessage();
    $strawberry = new Berry("Strawberry", "red", 60);
    $strawberry->message();
    $strawberry->intro();

 ?>





</body>
</html>
