<?php
$sql = "SELECT * FROM shop ;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo "
      <div class='child'>
        <form>
            <h2 class='content-child-title'>" . $row['itemname'] . "</h2>
            <div class='content-child-image'>
            <img src='' alt=''>
            </div>
            <hr>
            <input class ='input-function' type='number' value='" . $row['Price'] . "'></input>
            <input class ='input-function' type='number' value='" . $row['quantity'] . "'></input>
        </form>
      </div>";
  }
}

 ?>
