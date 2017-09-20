 <?php session_start();
  $_SESSION["connecte"]=0;
  $_SESSION['user']="";
 

 ?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<!-- Google fonts header  -->
        <link rel="shortcut icon" href="favicon.ico" type="x-icon"> 
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Fredericka+the+Great|Sacramento|Dosis" rel="stylesheet">


<!-- Google fonts header  -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
      <!-- <div class="container_fluid"> -->

       <div class="row entete">

            <div id="marque" class="col">
              <p> <strong>La Petite</strong><FONT color="#E64C93"> Boutique</FONT>.com</p>

            </div>
           
            
             <div class="connexion-button col  mr-0">
               <?php if ($_SESSION['connecte']==0)
                   {
                
                 echo '<a class="btn" href="administrateur.php">Connexion</a>';
               }
                else {
                    echo '<a class="btn" href="index.php">deconnexion'.$_SESSION['user'].'</a>';
                  

                }
                ?>
            </div>

            <!-- <div id="caddy" class="col">
              <img src="img/caddi.jpg" alt="caddy" class="caddu__img" height="45" width="45">
            </div> -->

        </div>
            




