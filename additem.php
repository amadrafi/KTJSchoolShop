<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include_once 'includes/dbh.inc.php' ?>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/additem.css">
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
