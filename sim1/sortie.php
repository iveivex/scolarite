 <?php
session_start();//lancement de la session
session_destroy();//destruction de la session
echo " Vous vous etes bien deconnect�";
header("location:index.php");//Vers la page d'accueil

 
?>
