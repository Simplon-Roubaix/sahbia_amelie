<?php 
 
include("header.php");
  
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




     
<?php


     


      try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=amelisahbiacommerce;charset=utf8', 'root', 'sahbia2017');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }

          
      
   



    
	if( isset($_POST['psw'])&&isset($_POST['user']) )
	{
		 $password=$_POST['psw'];
	    $user=htmlspecialchars($_POST['user']);
	     $_SESSION['user']=$user;
	     $_SESSION['connecte']=1;

        $req=$bdd->prepare('SELECT COUNT(*)  FROM administateurs  WHERE unsername=?');
       $req->execute(array($_POST['user']));
       $nombrecompte=$req->fetchColumn();
       
        


       if($nombrecompte>0)
       {
       	      $req2=$bdd->prepare('SELECT COUNT(*)  FROM administateurs  WHERE password=?');
             $req2->execute(array($_POST['psw']));
             $nombrpassword=$req2->fetchColumn();
             
          if($nombrpassword>0)
            {include("formulaire.php");

             $_SESSION['nom']=$_POST['user'];
             $_SESSION['password']=$_POST['psw'];
          

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
	}   

?> 




   <?php
	
	?>
</div>	
