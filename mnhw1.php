<!DOCTYPE html>
<html>
  <head>
    <title>MNorfolkHW1</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <body>
    <form action="display.php" method="GET"> <!--This is the form that the php code will pull from-->
      <label>First name: </label>
      <input type="text" name="first_name"/><br>
      <label>Last name: </label>
      <input type="text" name="last_name"/><br>
      <label>Age: </label>
      <input type="text" name="age"/><br>
      <label>&nbsp;</label>
      <input type="submit" value="Submit"/> <!--Once the submit button is hit, it goes to display.php-->
    </form>

    <?php
      $first_name = $_GET['first_name'];
      $last_name = $_GET['last_name'];
      $age = $_GET['age'];
    ?>
  </body>



</html>
