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
		  <form action="fiche_paie.php" method="POST">
				<div align="center">Matricule   :<input type="text" name="mat" />
				<input type="submit" value="valider" />
				</div>
		  </form>	
					
					
					
					
					
					
					
					
					
			    	
				</hgroup>
			
                        <?php include('footer.php');?>
</body>
</html>
