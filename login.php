<!DOCTYPE html>
<?php
  require 'includes/dbh.inc.php';
  if(!empty($_POST['user']) && !empty($_POST['password'])):
    $records = $conn->prepare('SELECT id, email, password FROM user WHERE email = :email');
    $record->bindParam(':email', $_POST['user']);
    $records->execute();
    $results = $record->fetch(PDO::FETCH_ASSOC);
    $records->close();

    if(count($results) > 0 && password_verify($_POST['password'], $results['password'])):
      function redirect($url) {
        ob_start();
        header('Location: additem.php'.$url);
        ob_end_flush();
        die();
      } else:
        die("There has been some error");
      endif;
  endif;
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Quicksand:400,700" rel="stylesheet">
  </head>
  <body>
    <div class="navbar">
      <div class="navbar-img">
        <a href="#home"><img src="img/navbar-logo.gif" alt="" id="navbar-logo"></a>
        <h1 class="navbar-title">KTJ SHOP</h1>
      </div>
      <div class="search-bar">
        <ul id="navbar-ul">
          <li class="nav-item"><a href="index.php" class="nav-link">Homepage</a></li>
        </ul>
      </div>
    </div>
    <div class="heading">
      <h1>Login</h1>
    </div>
    <form class="" action="login.php" method="post">
        <input type="text" name="user" value="" placeholder="Enter your name">
        <input type="password" name="password" value="" placeholder="password">
        <input type="submit">
    </form>
  </body>
</html>
