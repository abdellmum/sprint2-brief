<?php
include_once "../include/header.php";
require_once "../include/db.php";
?>
<div class="titlee">
    <img src="./img/plat_icon.png" alt="">
    <h1>En profitez bien</h1>
    <img src="./img/plat_icon.png" alt="">
</div>
<div class="menu">
<?php
      
      $sql = "select * FROM product ";
      $result = mysqli_query($link, $sql);

        while ($row = $result->fetch_assoc()) {
          echo '<div class="content"> <img src="../dist/img/'.$row["image"].'">
          <h3>'.$row["product_name"].'</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <h6>'.$row["price"].'dh</h6>
          <ul>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
            <li><i class="fa fa-star" aria-hidden="true"></i></li>
          </ul>
          <button class="commandez">commandez</button>
          </div>';
        }
    
      ?>
</div>
   

    
<?php
include_once "../include/footer.php";
?>