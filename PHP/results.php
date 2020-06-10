<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="db.css">
    <title></title>
  </head>
  <body>

    <?php
    // this page will run  a query and display the result(s)

    // we include the dbconnect.php code
    include("dbconnect.php");

    $name = $_POST['search'];

    // there are 3 steps to running a select query
    // 1. Set up the query in a variable
    $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$name%' OR lastname LIKE '%$name%'";

    // 2. WE go to the database and run the query
    $result_qry = mysqli_query($dbconnect, $result_sql);

    // 3. We organise our results into an associative array
    // Basically, we can use the coloum headings from the database table
    // We use the mysqli_fetch_assoc() fuction
    $result_aa = mysqli_fetch_assoc($result_qry);


    $firstname = $result_aa['firstname'];
    $lastname = $result_aa['lastname'];
    $tutor = $result_aa['Tutor'];

    ?>
    <div class="banner">
      <form class="" action="search.php" method="post">
        <button class="submit-box"type="submit" name="button">Return</button>
      </form>

    </div>

    <div class="container">
      <div class="module-border-wrap"><div class="module">
          <p><?php echo "$firstname $lastname $tutor"; ?></p>
      </div></div>

    </div>
  </body>
</html>
