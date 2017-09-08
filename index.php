
        <?php include("header.php"); ?>
           <?php include("produit.php");?> 
			<div class="container-fluid"> 
			 <div class="row">
			 <?php 
				 for($i =0; $i<6; $i++ )
				{
			 ?> 
			 
			  
			 
				   <div class="card-group col-sm-12 col-md-6 col-lg-4">
				     <div class="card">
				         <img class="card-img-top" src= "<?php  echo $produit[$i]['image_src'];?>" alt="Card image cap">
				        <div class="card-block">
				            <h4 class=\"card-title\"> <?php  echo $produit[$i]['Nom'];?></h4>
				            <p class="card-text"><?php  echo $produit[$i]['Description'];?></p>
				             <a href="details.php?id=<?php echo $i; ?>" class="btn btn-primary">detail </a>
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

        