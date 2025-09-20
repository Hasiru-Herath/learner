<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1>Contact Us</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="html_lessons.html">HTML</a>
      <a href="css_lessons.html">CSS</a>
      <a href="php_lessons.php">PHP</a>
    </nav>
  </header>

  <main>
    <h2>Contact Form</h2>
    <form method="post">
      <label>Name:</label><br>
      <input type="text" name="name" required><br><br>

      <label>Email:</label><br>
      <input type="email" name="email" required><br><br>

      <label>Message:</label><br>
      <textarea name="message" required></textarea><br><br>

      <button type="submit" name="send">Send</button>
    </form>

    <?php
      if (isset($_POST['send'])) {
        echo "<p>Thank you, " . htmlspecialchars($_POST['name']) . "! Your message has been received.</p>";
      }
    ?>
  </main>

  <footer>
    <p>© 2025 Learn Web Development</p>
  </footer>
</body>
</html>
