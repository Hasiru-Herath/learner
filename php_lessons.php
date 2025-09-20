<!DOCTYPE html>
<html>
<head>
  <title>PHP Lesson</title>
</head>
<body>
  <h2>Today's Date & Time</h2>
  <p><?php echo date("Y-m-d H:i:s"); ?></p>

  <h2>Simple Calculator</h2>
  <form method="post">
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <button type="submit" name="add">Add</button>
  </form>
  <?php
    if (isset($_POST['add'])) {
      echo "Result: " . ($_POST['num1'] + $_POST['num2']);
    }
  ?>
</body>
</html>
