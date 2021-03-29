<?php
session_start();
require_once "../include/db.php";
$id = $_SESSION["startSession"];
$admiName =  $_SESSION["name"];
if(empty( $id)){
  header("Location: ../admin/login.php");

}
echo $id;
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
  <div class="container">
    <div class="main">
      <div class="info">
        <div class="info__logo">
          <img src="./img/logowhite.png" alt="">
          <h1>YOUFOOD</h1>
        </div>
        <div class="info__user">
          <img class="addmin__img" src="../dist/img/email.png" alt="">
          <img  class="addmin__img" src="../dist/img/notofication.png" alt="">
          <h2><?php echo $admiName;?></h2>
          <img  class="addmin__img" src="../dist/img/iconfinder_User_4200769.png" alt="">
<a href="logout.php">se deconnecter</a>
        </div>
      </div>
      <div class="update">
        <div class="update__left">
          <div class="admin__menu">
          <div class="admin__list">
        
        <a href="./admin.php" class="active">Accueil</a>
        <a href="./umenu.php">menu</a>
        <a href="./commande.php">Commande</a>
        <a href="../admin.php">administrateur</a>
        <a href="../setting.php">parametres</a>
  
    </div>

          </div>

















        </div>
        <div class="update__right right">
          <div class="right__add">
           <a href="./umenu.php"><button class="add">ajouter element</button></a> 
          </div>
          <div class="right__element element">

            <div class="element__list list">
              <table class="table">
                <thead>
                  <tr>
                    <th>image</th>
                    <th>produit</th>
                    <th>prix</th>
                    <th>#</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "select * FROM product ";
                  $result = mysqli_query($link, $sql);

                    while ($row = $result->fetch_assoc()) {
                      echo '<tr>  
                      <td label="produit"><img src="../dist/img/'.$row["image"].'" alt=""></td>
                      <td label="produit">'.$row["product_name"].'</td>
                      <td label="prix">'.$row["price"].'dh</td>
                      <td label="modification"> <a href="umenu.php?action=edit&id='.$row["id"].'">modifier</a></td>
                    </tr>';
                    }
                  ?>
                 
                </tbody>
              </table>








            </div>
          </div>

        </div>
      </div>
    </div>






















  </div>









  <script src="js/all.js"></script>

</body>

</html>