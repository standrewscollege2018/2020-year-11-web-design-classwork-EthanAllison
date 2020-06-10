<?php
  //Checking to see if $_POST has file_get_contents

  // isset() checks to see if what is in the brakets has been

  if(!isset($_POST['firstname'])) {
    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
  }
  elseif($firstname = 'Ali-a') {
    header("Location: https://www.youtube.com/watch?v=y98De45A94Y");
  }
  else {
    echo 'Your gay';
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
    $firstname = $_POST['firstname'];


    if ($firstname == "Rumpelstiltskin") {
        echo "Congratulations, you guessed right";
      }
    else {
        echo "Sorry, that's wrong";

      }

     ?>
     <form  action="index.php" method="post">
       <button type="submit" name="button">Back</button>
     </form>
  </body>
</html>
