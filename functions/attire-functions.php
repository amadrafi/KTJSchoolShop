<?php
$sql = "SELECT * FROM attire ;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo "
      <div class='child'>
        <h2 class='content-child-title'>" . $row['itemname'] . "</h2>
        <div class='content-child-image'>
          <img src='' alt=''>
        </div>
        <hr>
        <h3><span> RM " . $row['price'] . "</span></h3>
        <h3> Quantity  = <span>" . $row['quantity'] . "</span></h3>
      </div>";
  }
}

 ?>
