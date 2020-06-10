<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="guess.css">
    <title></title>
  </head>
  <body>
<div class="submit">
  <form action="check.php" method="post">

    <input  class="guessfield" type="number" name="number" placeholder="Enter your guess">

    <button class="submit-box"type="submit" name="button">Submit</button>
    <?php
    if(isset($_GET['reply'])) {
      if($_GET['reply'] == 'correct') {
        echo "<h1 class='celebrate'>That's right!!</h1>";
        echo("<img src=minion.gif alt=Minion meme />");

      }
      elseif($_GET['reply'] == 'gay') {
        echo "<h1 class='gay'>You tried to fool me gay boi</h1>";
      }
      elseif($_GET['reply'] == 'toolow') {
        echo "<h1 class='low'>You guessed to low</h1>";
          }
      elseif($_GET['reply'] == 'toohigh') {
        echo "<h1 class='high'>You guessed to high</h1>";
      }
      elseif($_GET['reply'] == 'outofrange') {
        echo "<h1 class='outofrange'>You guessed out of range please guess only between 1-100</h1>";
      }

    }




     ?>
</div>


</form>

  </body>
</html>
