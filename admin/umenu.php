
<?php
require_once "../include/db.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script src="https://kit.fontawesome.com/30fc5c8b68.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../dist/css/style.css">


  <title>youfood</title>
</head>
<body>

<div class="add__item">
        
<a href="add.php?add"> <button class="button_crud">ajouter</button>  </a>

      
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
                      <a href="update.php?edit='.$row["id"].'"> <button class="button_crud">modifier</button>   </a>
                      <a href="process.php?delete='.$row["id"].'"><button class="button__crud">
                      <div class="icon">
                        <i class="fa fa-trash-o"></i>
                        <i class="fa fa-question"></i>
                        <i class="fa fa-check"></i>
                      </div>
                      <div class="text">
                        <span>suprimer</span>
                      </div>
                    </button> </a>
                      </div>';
                    }
                
                  ?>
                   
    </div>
                   
    




    
</body>
        
 </html>