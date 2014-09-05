<?php
  require_once('conn_db.php');
session_start();//lancement de la session
 if(isset($_SESSION['login']))//test d'authentification
{	
    header("location:enregister.php");//redirection
    exit();
}

?>


<?php include('menu.php');?>

			  <?php extract($_POST);?>
		  <h1  style="font-weight: bold; text-transform:uppercase;">
		  <?php echo $_POST['mois']; ?></h1> <h2 align="center" style="text-decoration: underline">
		  El&egrave;ves en r&egrave;gle avec la comptabilit&eacute; :</h2><br />
	
	<hr />
	
	
 
		  <?php
		  $mois=$_POST['mois'];
		  
$req=mysql_query("SELECT * FROM eleves WHERE $mois >0 AND classe='$_POST[classe]' ORDER BY classe DESC") or die ('Erreur requete');

?>

<table border='1' width='80%'>

<tr>
<th>Pr&eacute;nom</th>
<th>Nom</th>
<th>Classe</th>
<th>Sexe</th>
<th>Statut</th>
<th>Somme vers&eacute;</th>
</tr>

<?php
if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
if(isset($_POST['mois'])){
 while ($row = mysql_fetch_assoc($req)) {
?>

<tr>		
<td><?php echo ''.$row['prenom'].'';?></td>
<td><?php echo ''.$row['nom'].'';?></td>
<td><?php echo ''.$row['classe'].'';?></td>
<td><?php echo ''.$row['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row[$mois].'';?>&nbsp;FCFA</td>

</tr>

<?php
}
}

?>
		
			
						
			
</body>
</html>
