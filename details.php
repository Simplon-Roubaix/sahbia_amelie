<?php include("header.php");?> 

<?php include("produit.php");?> 

<?php
 $indice=$_GET['id']
?>

<div class="card mb-3">
  <img class="card-img-top" src="<?php  echo $produit[$indice]['image_src'];?>"  alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php  echo $produit[$indice]['Nom'];?></h4>

    <p class="card-text">color:<?php  echo $produit[$indice]['Color'];?></p>
    <p class="card-text">prix:<?php  echo $produit[$indice]['Prix'];?></p>
    <p class="card-text">description:<?php  echo $produit[$indice]['Description'];?></p>
    <a href="index.php" class="btn btn-primary">retour </a>

  </div>
</div>
