

  
  

  <?php
require_once "../include/db.php";






if(isset($_GET["delete"])){
    $id = $_GET["delete"];

    $sql = "DELETE FROM `product` WHERE `product`.`id` = $id ";
    $result = mysqli_query($link, $sql);
    if($result){
        header("Location: ./umenu.php");
    }else{
        echo "naaaaah"; 
    }

}

if(isset($_POST["edit"])){
    
    @$id = $_POST["id"];
  @  $name = $_POST["product_name"];
  @  $price = $_POST["price"];
  @  $image = $_POST["image"];
    if(!empty($id) & !empty($name) & !empty($price) & !empty($image))
    {
        $sql = " UPDATE `product` SET `product_name` = '$name',`price` = '$price',`image` = '$image' WHERE `id` = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            header("Location: ./umenu.php");
        }else{
            echo "naaaaah" .$id; 
        }
    }else{
        echo "oohlalaaa!!";
    }
  

}


if(isset($_POST["add"])){
    
    $name = $_POST["product_name"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    if ( !empty($name) & !empty($price) & !empty($image))
    {
        $sql = " INSERT INTO `product` (`product_name`,`price`,`image`)  VALUES (  '$name', '$price', '$image')";
        $result = mysqli_query($link, $sql);
        if($result){
            header("Location: ./umenu.php");
        }else{
            echo "naaaaah" ; 
        }
    }else{
        echo "oohlalaaa!!";
    }
  


} 
  /* =================================   
  login
==================================== */



@$username=$_POST['username'];
  @$password=$_POST['password'];
if(isset($_POST['login'])){
   
 
   $sql="select * FROM admin where name='".$username." 'AND password='".$password." ' ";
   $result = mysqli_query($link,$sql);
   $row=mysqli_fetch_assoc($result);
   if(mysqli_num_rows($result)==1){
    session_start(); 
       $_SESSION["startSession"]=$row["id"];
       $_SESSION["name"]=$row["name"];
      header("Location: ../admin/admin.php");
      exit();
   }
   else{
      echo "veillez verifier vos infos"; 
   }
    
}




