<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php


    // We use echo to create HTML (print)
    echo("<h1>Hello world</h1>");


    //Variables always start with a $

    $name = "Mickey Mouse";
    // Variables can be inserted into strings, such as when we are echoing something
    echo("<h2>Hello $name</h2>");


    // if statements use () brackets for the condition and {} for the code to run
    if ($name == "Mickey Mouse") {
      //code...
      echo("The name was Mickey Mouse");

    } else if ($name == "Mickey House"){
      echo("It isn't Mickey Mouse, it's Mickey House");
    } else {
      echo("It isn't any of you");
    }

    // do {} while () loop
    $counter = 1;
    do {
      //code
      echo("<p>$counter</p>");
      $counter += 1;
    } while ($counter <= 10);
      // code...


     ?>

     <form  action="hello.php" method="post">
       <input type="text" name="firstname" placeholder="Enter your name">
       <button type="submit" name="button">Click me!</button>
     </form>
  </body>
</html>
