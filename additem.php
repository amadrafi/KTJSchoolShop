<?php
session_start();
require 'includes/dbh.inc.php';
?>
<?php 
if(isset($_SESSION['user'])&&$_SESSION['user']!=""){  //MUltiple session val better
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/additem.css">
    <link rel="stylesheet" href="css/style.css">
  	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Quicksand:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="navbar">
  	  <div class="navbar-img">
  	    <a href="#home"><img src="img/navbar-logo.gif" alt="" id="navbar-logo"></a>
  	    <h1 class="navbar-title">KTJ SHOP</h1>
  	  </div>
  	  <div class="search-bar">
  	    <ul id="navbar-ul">
  	      <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
  	    </ul>
  	  </div>
    </div>
    <div class="sidenav">
      <div id="sidenav-container">
        <a href="additem.php" class="sidenav-link-active">Add Item</a>
        <a href="index-edit.php">school supplies</a>
        <a href="attire-edit.php">attire</a>
        <a href="sport-supplies-edit.php">sport supplies</a>
      </div>
    </div>
    <div class="container">
      <h2>School Supplies</h2>
      <form class="form" action="additem/additem.function.php" method="post">
        <input type="text" required name="name" placeholder="Name" value="">
        <input type="number" required name="price" placeholder="Price" value="">
        <input type="number" required name="quantity" placeholder="Quantity" value="">
        <button type="submit" required name="submit">Add Item</button>
      </form>
      <h2>Attire</h2>
      <form class="form" action="additem/addattire.function.php" method="post">
        <input type="text" required name="name" placeholder="Name" value="">
        <input type="number" required name="price" placeholder="Price" value="">
        <input type="number" required name="quantity" placeholder="Quantity" value="">
        <button type="submit" required name="submit">Add Item</button>
      </form>
      <h2>Sport Supplies</h2>
      <form class="form" action="additem/addsports.php" method="post">
        <input type="text" required name="name" placeholder="Name" value="">
        <input type="number" required name="price" placeholder="Price" value="">
        <input type="number" required name="quantity" placeholder="Quantity" value="">
        <button type="submit" required name="submit">Add Item</button>
      </form>
    </div>
  </body>
</html>
<?php 
}
else{
    echo '<script type="text/JavaScript">
    window.alert("You are not logged in");
    </script>';
    //redirect to login page or just display message 
    header("Location: login.php");
}
?>