<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include_once 'includes/dbh.inc.php' ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>School supplies</h2>
    <form class="" action="additem/additem.function.php" method="post">
      <input type="text" required name="name" placeholder="Name" value="">
      <input type="number" required name="price" placeholder="Price" value="">
      <input type="number" required name="quantity" placeholder="Quantity" value="">
      <button type="submit" required name="submit">Add Item</button>
    </form>
    <h2>Attire</h2>
    <form class="" action="additem/addattire.function.php" method="post">
      <input type="text" required name="name" placeholder="Name" value="">
      <input type="number" required name="price" placeholder="Price" value="">
      <input type="number" required name="quantity" placeholder="Quantity" value="">
      <button type="submit" required name="submit">Add Item</button>
    </form>
    <h2>Sport supplies</h2>
    <form class="" action="additem/addsports.php" method="post">
      <input type="text" required name="name" placeholder="Name" value="">
      <input type="number" required name="price" placeholder="Price" value="">
      <input type="number" required name="quantity" placeholder="Quantity" value="">
      <button type="submit" required name="submit">Add Item</button>
    </form>

  </body>
</html>
