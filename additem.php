<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include_once 'includes/dbh.inc.php' ?>
    <link rel="stylesheet" href="css/additem.css">
  	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Quicksand:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
