<!-- Once the form is submitted, the variables are printed to the screen -->
<!DOCTYPE html>
<html>
  <body>
    <p>Hello, my name is <?php echo $_GET['first_name'] . " ". $_GET['last_name'];?>.</p> <!--Prints first and last name to the screen-->
    <p>I am <?php echo $_GET['age'];?> years old and...</p>
    <?php
    if($_GET['age'] < 18) { //Different messages depending on the users age
      echo 'I am not old enough to vote in the United States.';
    } else {
      echo 'I am old enough to vote in the United States.';
    }
    ?>
  </body>
</html>
