<?php 
   session_start();

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
	     

        $req=$bdd->prepare('SELECT id  FROM administateurs  WHERE unsername=? AND password=?');
       $req->execute(array($_POST['user'],$_POST['psw']));
       $compte_existe=$req->fetch();
       
        


       if(!$compte_existe)
       {
       	    echo "<script language=\"javascript\">";
			     echo "alert('mot de passe ou nom utilistaur  incorect')";
			     echo "</script>";
           header('Location:connexion.php');
 
         }
          else {  include("formulaire.php");

                  
                   $_SESSION['id']=$compte_existe['id'];
                   $_SESSION['pseudo']=$user;

                }     
      }


             // $_SESSION['nom']=$_POST['user'];
             // $_SESSION['password']=$_POST['psw'];
             // $_SESSION['connecte']=1;


          // echo "<script>window.location.replace(\"header.php\")</script>";
          

           
        
 

?> 




  
</div>	
