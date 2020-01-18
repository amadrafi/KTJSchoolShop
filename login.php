<?php
  session_start();
  require 'includes/dbh.inc.php';
  //3. If the form is submitted or not.
  //3.1 If the form is submitted
  if (isset($_POST['user']) and isset($_POST['password'])){
  //3.1.1 Assigning posted values to variables.
  $username = $_POST['user'];
  $password = $_POST['password'];
  //3.1.2 Checking the values are existing in the database or not
  $query = "SELECT * FROM `user` WHERE user='$username' and password='$password'";

  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $count = mysqli_num_rows($result);
  //3.1.2 If the posted values are equal to the database values, then session will be created for the user.
  if ($count == 1){
  $_SESSION['user'] = $username;
  }else{
  //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
  $fmsg = "Invalid Login Credentials.";
  echo '<script type="text/JavaScript">
     window.alert("Invalid login details");
     </script>';
}}
  //3.1.4 if the user is logged in Greets the user with message
  if (isset($_SESSION['user'])){
    header("Location: additem.php");
}else{}
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/logincss.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Quicksand:400,700" rel="stylesheet">
  </head>
  <body>
    <!-- <div class="navbar">
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
      <h1 class="title">Login</h1>
    </div>
    <form class="" action="login.php" method="post" class="form-login">
        <input type="text" name="user" value="" placeholder="Username">
        <input type="password" name="password" value="" placeholder="password">
        <input type="submit">
    </form> -->
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      <!-- Login Form -->
      <form action="login.php" method="post">
        <input type="text" id="login" class="fadeIn second" name="user" placeholder="username">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="index.php">Homepage</a>
      </div>

    </div>
  </div>
  </body>
</html>
