<?php
  require_once('conn_db.php');
?>


<?php include('menu.php');?>

			  <?php extract($_POST);?>
		  <h1  style="font-weight: bold; text-transform:uppercase;">
		  <?php echo $_POST['mois']; ?></h1> <h2 align="center" style="text-decoration: underline">
		  El&egrave;ves non en r&egrave;gle avec la comptabilit&eacute; :</h2><br />
	
	<hr />
	
	<form action="searchparclass1.php" method="POST">
		  <h3 style="text-align: center;">Ou bien , Voulez vous rechercher en fonction de la
                       classe ?.
<input type="hidden" name="mois" value="<?php echo $mois; ?>" />
<p><span>
<input type="submit" class="submit" name="valider" value="oui" /></h3>
</span></p>
		  <?php
		  $mois=$_POST['mois'];
		  
$req=mysql_query("SELECT * FROM eleves WHERE $mois='non' ORDER BY classe DESC") or die ('Erreur requete');
$req2=mysql_query("SELECT * FROM classes") or die ("Erreur requete");
?>


</form>
	
	
 
		  <?php
		  $mois=$_POST['mois'];
		
$req=mysql_query("SELECT * FROM eleves WHERE $mois='non' ORDER BY classe DESC") or die ('Aucun r&eacute;sultat');
$req2=mysql_query("SELECT * FROM classes") or die ("Aucun r&eacute;sultat");
?>

<table border='1' width='80%'>





<tr>
<th>Pr&eacute;nom</th>
<th>Nom</th>
<th>Classe</th>
<th>Sexe</th>
<th>Statut</th>

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
<td>Impay&eacute;</td>

</tr>

<?php
}
}

?>
</table>
<br /><br /><br /><br /><br />	  
		
			
						
			
</body>
</html>
