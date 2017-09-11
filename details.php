<?php include("header.php");?> 

<?php include("produit.php");?> 

<?php
 $indice=$_GET['id']
?>
<div class="container-fluid">
<div class="jumbotron jumbotron-fluid">
  <div class="container center">
    <img class="card-img-top" src="<?php  echo $produit[$indice]['image_src'];?>" alt="image">

    <h1 class="display-3"><?php  echo $produit[$indice]['Nom'];?></h1>
    <p class="lead"><?php  echo $produit[$indice]['Description'];?></p>
  </div>
</div>
</div>