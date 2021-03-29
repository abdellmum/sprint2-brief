<form action="./process.php" method="post">
<?php 
if(isset($_GET["edit"])){
    $id = $_GET["edit"]; 
    echo '<input type="hidden" name="id"  value="'.$id.' ">' ;
};?>


<input type="text" name="image"  placeholder="entrer image ">
<input type="text" name="product_name"  placeholder="entrer nom ">
<input type="text" name="price" placeholder="entrer prix">
<button type="submit" name="edit"> valider</button></a>
<button type="submit" name="exit"> retour</button></a>

</form>