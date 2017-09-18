<?php include("header.php");
      $password=$_POST['psw'];
	 $user=htmlspecialchars($_POST['user']);


      try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=amelisahbiacommerce;charset=utf8', 'root', 'sahbia2017');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }

          
      $req=$bdd->prepare('SELECT COUNT(*)  FROM administateurs  WHERE unsername=?');
       $req->execute([$user]);
       $nombrecompte=$req->fetchColumn();
       
        
   



    
	if( isset($password)&&isset($user) )
	{
       if($nombrecompte>0)
       {
       	      $req2=$bdd->prepare('SELECT COUNT(*)  FROM administateurs  WHERE password=?');
             $req2->execute([$password]);
             $nombrpassword=$req2->fetchColumn();
             
          if($nombrpassword>0)
            {include("formulaire.php");}
         }
         else {
      print "Aucune ligne ne correspond à la requête.";
   }
	}
	else {
		    echo "<script language=\"javascript\">";
			echo "alert('mot de passe ou nom utilistaur  incorect')";
			echo "</script>";
	   }

?> 


<div id="administateur" class="text-center">
	 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" accept-charset="utf-8">
         User name:
         <input type="text" name="user">
         User password:

        <input type="password" name="psw">
	    <input type="submit" value="Valider" />
		
	 </form>
	</div>
    <hr>
   <br>

   <?php
	
	?>
</div>	
