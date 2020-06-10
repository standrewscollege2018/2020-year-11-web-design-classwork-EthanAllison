<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="fitzbuzz.css">
  </head>
  <body>
    <div class="container">
      <form  action="loop.php" method="post">
        <input class="guess-box" type="number" name="number" placeholder="Enter guess">
        <button class="submit-box" type="submit" name="button">Submit</button>

        <?php
        if(isset($_GET['reply'])) {
          if($_GET['reply'] == 'fizzbuzz') {
            echo "<h1 class= 'Fizzbuzz'> FIZZBUZZ </h1>";
          }
          else if($_GET['reply'] == 'fizz'){
            echo "<h1 class= 'Fizz'> Fizz </h1>";
          }
          else if($_GET['reply'] == 'buzz'){
            echo "<h1 class= 'Buzz'> Buzz </h1>";
          }
          else if($_GET['reply'] == 'number') {
            echo "<h1 class= 'numbers'> ['number']  </h1>";
          }
        }


        ?>

    </div>







    </form>

  </body>
</html>
