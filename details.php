<?php include("header.php");

try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=amelisahbiacommerce;charset=utf8', 'root', 'sahbia2017');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }

     $indice=$_GET['i'];
     $src=$_GET['sr'];
     $req=$bdd->prepare('SELECT * FROM articles  WHERE id=? ');
      $req->execute([$indice]);

      $donnes=$req->fetch();
    ?>
<div class="card mb-3">
  <img class="card-img-top" src="<?php  echo $src;?>"  alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title"><?php  echo $donnes['nom'];?></h4>

    <p class="card-text">color:<?php  echo $donnes['color'];?></p>
    <p class="card-text">prix:<?php  echo $donnes['prix'];?></p>
    <p class="card-text">description:<?php  echo $donnes['description'];?></p>
    <a href="index.php" class="btn btn-primary">retour </a>

  </div>
</div>
