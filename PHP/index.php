<?php
function greet($name) { return "Hello, " . htmlspecialchars($name) . "!"; }
$name = isset($_GET['name']) ? $_GET['name'] : "Lab 4";
?>
<!doctype html>
<html lang="en">
  <head><meta charset="utf-8"><title>Lab 4 PHP App</title></head>
  <body>
    <h1><?php echo greet($name); ?></h1>
    <p>PHP is running under Apache in Docker.</p>
    <form method="get">
      <label>Enter your name: <input name="name"></label>
      <button type="submit">Greet</button>
    </form>
  </body>
</html>
