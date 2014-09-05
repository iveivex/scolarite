<?php
  require_once('conn_db.php');

?>


<?php include('menu.php');?>


                                <hgroup>
					
					
				</hgroup>

			  <?php extract($_POST);?><br /><br />
		  <h3  style="font-weight: bold; text-transform:uppercase; text-align: center;">
		 
		  Liste de tous les Eleves</h3><br />
	
	<hr />
	
		  <?php
		  
	$req=mysql_query("SELECT * FROM eleves ORDER BY Classe Desc") or die ('Erreur requete');
?>



<table border='1' width='80%'>

<tr>
  <th>Matricule</th>
<th>Pr&eacute;nom</th>
<th>Nom</th>
<th>Classe</th>
<th>Date de naissance</th>
<th>Lieu</th>
<th>Sexe</th>
<th>Photo</th>
<th>Redoublant</th>

</tr>

<?php
if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
else {
 while ($row = mysql_fetch_assoc($req)) {
?>

<tr>
  <td><?php echo ''.$row['mat'].'';?></td>
<td><?php echo ''.$row['prenom'].'';?></td>
<td><?php echo ''.$row['nom'].'';?></td>
<td><?php echo ''.$row['classe'].'';?></td>
<td><?php echo ''.$row['date'].'';?></td>
<td><?php echo ''.$row['lieu'].'';?></td>
<td><?php echo ''.$row['sexe'].'';?></td>
<td style="text-align: center;">
			<img src="uploads/<?php echo ''.$row['mat'].''.'.jpg';?>"
				  title="<?php echo ''.$row['mat'].''; ?>"
				  width="87" height="46"
			/>
				  </td>
<td><?php echo ''.$row['redoublant'].'';?></td>


</tr>

<?php
}
}

?>
		
			
</table>		
	
</body>
</html>