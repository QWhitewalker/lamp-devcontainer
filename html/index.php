<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Title</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- PHP Hello World-->
  <?php
  echo "<p>Hello World</p>";
  ?>

  <!-- Database Connection test-->
  <?php
  $servername = "db";
  $username = "root";
  $password = "password";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=forest", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>

</body>

</html>