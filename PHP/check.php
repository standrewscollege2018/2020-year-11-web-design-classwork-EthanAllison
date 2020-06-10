<?php

  if(!isset($_POST['number'])) {
    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
  }









 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $number = 26;
    $guess = $_POST['number'];


    if($guess < 0 or $guess > 100) {
      header('Location: guess.php?reply=outofrange');
    }
    elseif ($guess == $number){
      header('Location: guess.php?reply=correct');
    }
    elseif($guess == ""){
      header('Location: guess.php?reply=gay');
    }
    elseif($guess < $number){
      header('Location: guess.php?reply=toolow');
    }
    elseif($guess > $number){
      header('Location: guess.php?reply=toohigh');
    }
    else{
      echo 'Your gay';
    }

     ?>
     <form  action="guess.php" method="post">
       <button type="submit" name="button">Back</button>

     </form>

  </body>
</html>
