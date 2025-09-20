<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Lessons</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1>PHP Basics</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="html_lessons.html">HTML</a>
      <a href="css_lessons.html">CSS</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <h2>Current Date & Time</h2>
    <p><?php echo date("Y-m-d H:i:s"); ?></p>

    <h2>Simple Calculator</h2>
    <form method="post">
      <input type="number" name="num1" required>
      <input type="number" name="num2" required>
      <button type="submit" name="add">Add</button>
    </form>

    <?php
      if (isset($_POST['add'])) {
        echo "<p>Result: " . ($_POST['num1'] + $_POST['num2']) . "</p>";
      }
    ?>
  </main>

  <footer>
    <p>© 2025 Learn Web Development</p>
  </footer>
</body>
</html>
