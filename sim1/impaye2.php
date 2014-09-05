<?php
  require_once('conn_db.php');
?>


<?php include('menu.php');?>
<h1  style="font-weight: bold; align:left; display: inline;">
  Classe : <?php echo $_POST['classe']; ?>
		 </h1>
			  <?php extract($_POST);?>
		  <h1  style="font-weight: bold; text-transform:uppercase;">
		  Mois : <?php echo $_POST['mois']; ?></h1> <h2 align="center" style="text-decoration: underline">
		  Ne sont pas en r&egrave;gle avec la comptabilit&eacute; :</h2><br />
	
	<hr />
	
		  <?php
		  $mois=$_POST['mois'];
		
$req=mysql_query("SELECT * FROM eleves WHERE $mois='non' AND classe='$_POST[classe]' ORDER BY classe DESC") or die ('Aucun r&eacute;sultat pour l\'instant');

?>


<h1 id="Octobre"><?php $mois?></h1>
<table border='1' width='80%'>
<tr>
<th>Pr&eacute;nom</th>
<th>Nom</th>
<th>Classe</th>
<th>Sexe</th>
<th>Statut</th>

</tr>
<?php
if (!$req) echo "Aucun r&eacute;sultat";

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

?>			
</table>

<br /><br /><br /><br /><br />	  
		
			
						
			
</body>
</html>
