
        <?php include("header.php"); 
      
          // DISPLAY ARTICLE FROM DATABASE 
         try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=amelisahbiacommerce;charset=utf8', 'root', 'sahbia2017');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }

        $req=$bdd->query('SELECT * FROM articles');
        
        while($donnes=$req->fetch())
        {

        ?>

			<div class="container-fluid">
			 <div class="row">
				   <div class="card-group col-sm-12 col-md-6 col-lg-4">
				     <div class="card">
				         <img class="card-img-top center" src= "" alt="Card image cap" height="250" width="250">
				        <div class="card-block">
				            <h4 class="card-title"> <?php  echo $donnes['nom'];?></h4>
				            <p class="card-text">color:<?php  echo $donnes['color'];?></p>
				            <p class="card-text">prix:<?php  echo $donnes['prix'];?></p>
				             <a href="details.php?i=<?php echo $donnes['id']; ?>" class="btn btn-primary">detail </a>
				        </div>
				     </div>
			 	  </div>



<?php
}

?>
</div>
</div>



        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->


      <?php include("footer.php"); ?>
