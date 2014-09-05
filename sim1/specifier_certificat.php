<?php
  require_once('conn_db.php');
session_start();//lancement de la session
 if(isset($_SESSION['login']))//test d'authentification
{	
    header("location:enregister.php");//redirection
    exit();
}

?>



<!DOCTYPE html>
<html lang="fr-FR">
<head>
<title>Enregistrer</title>

<?php include('include1.php');?>



</head>
<body class="blog logged-in admin-bar no-customize-support">

                  <?php
                          include('menu.php');
                  ?>
                                <hgroup>
					<br /><br /><br />
					
					<h1 align="center" style="font-weight: bold">Certificat de scolarit&eacute;</h1><br />
		  <form action="certificat.php" method="POST">
				<div align="center" >
				  Pr&eacute;nom<input align="left" type="text" name="prenom" />&nbsp;&nbsp;&nbsp;
				  Nom : <input align="center" type="text" name="nom" />&nbsp;&nbsp;&nbsp;
				  Classe : <input align="right" type="text" name="classe" />&nbsp;&nbsp;&nbsp;
				</div><br /><br />
				<div align="center">
				<input class='btn1' type='submit' value='Valider' align='center'>
				</div>
		  </form>	
					
					<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
					
					
					
					
					
					
					
			    	
				</hgroup>
			
                        <?php include('footer.php');?>
</body>
</html>
