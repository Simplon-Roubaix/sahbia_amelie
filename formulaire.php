
<?php include('header.php') ?>
<div  id="form_d" class="m-5 m-a">
<form action="produit.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <!-- <label for="nom">Nom:</label> -->
    <input type="text" class="form-control" id="nom" name="nom" placeholder="nom du produit">
    
  </div>
  <div class="form-group">
    <!-- <label for="color">Color:</label> -->
    <input type="text" class="form-control" id="color" name="color" placeholder="couleur du produit">
  </div>
  <div class="form-group">
    <!-- <label for="prix">Prix:</label> -->
    <input type="number" class="form-control" id="prix" name="prix" placeholder="prix du produit">
   
  </div>
  
  
  <div class="form-group">
    <!-- <label for="description">Description</label> -->
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <div class="form-group">
    <!-- <label for="image">Image:</label> -->
     <input type="hidden" name="MAX_FILE_SIZE" value="123450" />
    <input type="file" class="form-control-file" id="image"  name="image" aria-describedby="fileHelp">

  </div>
  
 
  <input type="submit"  value="Ajouter" class="btn btn-primary">
</form>

<a href="index.php" class="btn decxbtn mt-5"> deconnexion</a>
</div>