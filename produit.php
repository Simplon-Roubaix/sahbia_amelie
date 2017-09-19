<?php         
                  // $produit = [['image_src'=>'img/sac1.jpg',
                  //               		  'Nom' => 'Sac à main en cuir',

                  //               		  'Color' => 'bleu',
                  //                		  'Prix' => '150 €',
                  //               		  'Description' => 'Sac à main en cuir.
                  //                               Anse réglable.
                  //                               2 poignées.
                  //                               2 poches devant.
                  //                               Poche intérieure zippée.
                  //                               Rivets décoratifs sur les côtés.
                  //                               Renforts à la base.
                  //                               Fermeture zippée.

                  //                               Coloris : camel
                  //                               Matière : 100% cuir de vachette
                  //                               Dimensions : 32 x 28 x 14 cm'],

                  //                  ['image_src'=>'img/sac2.jpeg',
                  //               		  'Nom' => 'Sac à main en cuir',

                  //               		  'Color' => 'rouge',
                  //                		  'Prix' => '500 €',
                  //               		   'Description' => 'Sac à main en cuir grainé.
                  //                       2 anses.
                  //                       Logo métallique devant.
                  //                       Brides à boucle décoratives sur les côtés.
                  //                       3 compartiments intérieurs dont 1 zippé.
                  //                       3 poches intérieures dont 1 zippée.
                  //                       Poche zippée au dos.
                  //                       Fermeture zippée.

                  //                       Coloris : cognac
                  //                       Matière : 100% cuir
                  //                       Matière doublure : toile
                  //                       Dimensions : 33 x 26 x 13 cm'],
                  //                   ['image_src'=>'img/sac3.jpg',
                  //               	 'Nom' => 'Sac à main en cuir',

                  //               	  'Color' => 'vert',
                  //                	 'Prix' => '70 €',
                  //                   'Description' => 'Sac à main en cuir grainé.
                  //                       Anse.
                  //                       Logo métallique et pompons devant.
                  //                       Bride à boucle et rivets décoratifs sur les côtés.
                  //                       3 compartiments intérieurs dont 1 zippé.
                  //                       3 poches intérieures dont 1 zippée.
                  //                       Poche zippée au dos.
                  //                       Fermeture zippée et par rabat.

                  //                       Coloris : cognac
                  //                       Matière : 100% cuir
                  //                       Matière doublure : toile
                  //                       Dimensions : 36 x 25 x 13 cm'],

                  //                   ['image_src'=>'img/sac4.jpg',
                  //               	 'Nom' => 'Sac à main en cuir',

                  //               	  'Color' => 'marron',
                  //                	 'Prix' => '80 €',
                  //                   'Description' => 'prduit_beaute'],
                  //                   ['image_src'=>'img/sac5.jpg',
                  //               	 'Nom' => 'Sac à main en cuir',

                  //               	  'Color' => 'beige',
                  //                	 'Prix' => '120 €',
                  //                   'Description' => 'Sac à main en cuir grainé.
                  //                   Anse.
                  //                   Logo métallique et pompons devant.
                  //                   Bride à boucle et rivets décoratifs sur les côtés.
                  //                   3 compartiments intérieurs dont 1 zippé.
                  //                   3 poches intérieures dont 1 zippée.
                  //                   Poche zippée au dos.
                  //                   Fermeture zippée et par rabat.

                  //                   Coloris : cognac
                  //                   Matière : 100% cuir
                  //                   Matière doublure : toile
                  //                   Dimensions : 36 x 25 x 13 cm'],

                  //                   ['image_src'=>'img/sac6.jpg',
                  //               	 'Nom' => 'Sac à main en cuir',

                  //               	  'Color' => 'vert',
                  //                	 'Prix' => '60 €',
                  //                   'Description' => 'Sac à main en cuir grainé.
                  //                   Anse.
                  //                   Logo métallique et pompons devant.
                  //                   Bride à boucle et rivets décoratifs sur les côtés.
                  //                   3 compartiments intérieurs dont 1 zippé.
                  //                   3 poches intérieures dont 1 zippée.
                  //                   Poche zippée au dos.
                  //                   Fermeture zippée et par rabat.

                  //                   Coloris : cognac
                  //                   Matière : 100% cuir
                  //                   Matière doublure : toile
                  //                   Dimensions : 36 x 25 x 13 cm']
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

     
     $req3 = $bdd->prepare('INSERT INTO imagesinfor(src, poid, type) VALUES(:src, :poid, :type)');

        $req3->execute(array(

            'src' => $src,

            'poid' => $poid,

            'type' => $type
               

            ));

         $bdd->exec('ALTER TABLE imagesinfo ADD CONSTRAINT fk_num_article FOREIGN KEY (idarticle) REFERENCES aerticles(id)' );
 ?>



                                
 ?>
