<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fitzbuzz.css">
  </head>
  <body>
    <?php
    $counter = $_POST['number'];

      if($counter%3 == 0 and $counter%5 == 0) {
        header("Location: fizzbuzz.php?reply=fizzbuzz");
      }
      else if($counter%3 == 0) {
        header("Location: fizzbuzz.php?reply=fizz");
      }
      else if($counter%5 == 0) {
        header("Location: fizzbuzz.php?reply=buzz");
      }
      else {
        header("Location: fizzbuzz.php?reply=number");
      }






     ?>
  </body>
</html>
