<?php         
                  
// ADD ARTICLES IN TABLE ARTICLES IN DATABASE:
// -------------------------------------------------------------------------
 try

        {

            $bdd = new PDO('mysql:host=localhost;dbname=amelisahbiacommerce;charset=utf8', 'root', 'sahbia2017');

        }

        catch(Exception $e)

        {

                die('Erreur : '.$e->getMessage());

        }

        //INSERT INFORMTION FOR ARTICLE
        //--------------------------------------------------------------------
        $nom=htmlspecialchars($_POST['nom'] );
        $color=htmlspecialchars($_POST['color'] );
        $prix=htmlspecialchars($_POST['prix']) ;
        $description=htmlspecialchars($_POST['description']);
      


        $req = $bdd->prepare('INSERT INTO articles(nom, color, prix, description) VALUES(:nom, :color, :prix, :description)');

        $req->execute(array(

            'nom' => $nom,

            'color' => $color,

            'prix' => $prix,

            'description' => $description

            

            ));

        $res=$req->fetch();

   

     //INSERT INFORMATION FOR IMAGE
     //--------------------------------------------------------------------- 
     $maxsize=htmlspecialchars($_POST['MAX_FILE_SIZE'] );
     if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";
     if ($_FILES['image']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
     


 
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );

  
//2. substr(chaine,1) ignore le premier caractère de chaine.

//3. strtolower met l'extension en minuscules.
  $target_dir = "img/";
  $target_file = $target_dir . basename($_FILES['image']['name']);
  $name_file=$_FILES['image']['name'];
  $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );

  
if ( !in_array($extension_upload,$extensions_valides) ) echo "Extension incorrecte";
 
$resultat = move_uploaded_file($_FILES['image']['tmp_name'], $target_file);   
    if ($resultat){ echo "Transfert réussi";}
      else {echo "le tranfert ne pas fait";}

   
 //ADD INFORMATION IMAGE IN THE TABLE      
 //-------------------------------------------------- 
   
     $src = $target_dir. $name_file;
    
    
     $poid=$_FILES['image']['size'];
  
     $type=$_FILES['image']['type'] ;

    //requette pour réscupérer l'id d'article:
    $req4=$bdd->query('SELECT id FROM articles ORDER BY id DESC LIMIT 1 ');
     $idarticle=$req4->fetch();
     $idarticle=(int)$idarticle[0];
    var_dump($idarticle);
     
     $req3 = $bdd->prepare('INSERT INTO imagesinfor(idarticle,src, type, taille) VALUES(:idarticle, :src, :type, :taille)');
        $req3->execute(array(
             'idarticle'=> $idarticle,
            'src' => $src,

            'type' => $type,

            'taille' => $poid
               

            ));

         // $req4=$bdd->exec('ALTER TABLE imagesinfor ADD CONSTRAINT fk_num_article FOREIGN KEY (idarticle) REFERENCES aerticles(id)' );
 ?>



                                

