<?php
  require_once('conn_db.php');

?>

<?php include('menu.php');?>
<hgroup>
					<div id="main">
   
      <div id="menubar">
  <ul id="menu">
	<li><a href="liste.php">Liste</a></li>
	<li><a href="modifier.php">Modifier</a></li>
	<li><a href="supprimer.php">supprimer</a></li>
	<li><a href="compta.php">Espace Comptable</a></li>
	<li><a href="surveillant.php">Espace surveillant</a></li>

  </ul>


   </div>
      </div>
				</hgroup>


			  <?php extract($_POST);?>
		  <h1  style="font-weight: bold; text-transform:uppercase;">
		 
		  Modifier</h2><br />
	
	<hr />
	
		  <?php
		  
	$req=mysql_query("SELECT * FROM eleves ORDER BY Classe Desc") or die ('Erreur requete');
?>


<form method="GET" action="specifier_modifier.php" >
<table border='1' width='80%'>

<tr>
<th>Pr&eacute;nom</th>
<th>Nom</th>
<th>Classe</th>
<th>Date de naissance</th>
<th>Lieu</th>
<th>Sexe</th>
<th>Photo</th>
<th>Redoublant</th>
<th>Matricule</th>
<th>Modification</th>

</tr>

<?php
if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
else {
 while ($row = mysql_fetch_assoc($req)) {
?>

<tr>		
<td name="prenom"><?php echo ''.$row['prenom'].'';?></td>
<td name="nom"><?php echo ''.$row['nom'].'';?></td>
<td name="classe"><?php echo ''.$row['classe'].'';?></td>
<td name="date"><?php echo ''.$row['date'].'';?></td>
<td name="lieu"><?php echo ''.$row['lieu'].'';?></td>
<td name="sexe"><?php echo ''.$row['sexe'].'';?></td>
<td style="text-align: center;">
			<img src="uploads/<?php echo ''.$row['mat'].''.'.jpg';?>"
				  title="<?php echo ''.$row['mat'].''; ?>"
				  width="60" height="30"
			/>
				  </td>
<td name="redoublant"><?php echo ''.$row['redoublant'].'';?></td>
<td name="mat"><?php echo ''.$row['mat'].'';?></td>
<th name="mat"><a href="specifier_modifier.php?id=<?php echo ''.$row['mat'].'';?>">Modifier</a></th>

</tr>

<?php
}
}

?>
		
			
</table>		
</form>		
</body>
</html>
