<?php
  include_once '../includes/dbh.inc.php';

  $name = $_POST['name'];
  $price = $_POST['price'];
  $qt = $_POST['quantity'];

  $query = "INSERT INTO sport (itemname, price, quantity) VALUES ('$name', '$price' , '$qt');";
  mysqli_query($conn, $query);

  header("Location: ../additem.php?Successful");
 ?>
