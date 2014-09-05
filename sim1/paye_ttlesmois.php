<?php
  require_once('conn_db.php');
session_start();//lancement de la session
?>

<?php include('menu.php');?>

			  <?php extract($_POST);?>
		  <h2 align="center" style="text-decoration: underline">
		  El&egrave;ves en r&egrave;gle avec la comptabilit&eacute; par mois :</h2><br />
	
	
	<div style=" text-align:center; text-transform: uppercase; font-size: large;">
	  
	  
	       <a href="paye_ttlesmois.php#Octobre" class="submit">Octobre</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Novembre" class="submit">Novembre</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Decembre" class="submit">Decembre</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Janvier" class="submit">Janvier</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Fevrier" class="submit">Fevrier</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Mars" class="submit">Mars</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Avril" class="submit">Avril</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Mai" class="submit">Mai</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Juin" class="submit">Juin</a>&nbsp;&nbsp;
	       <a href="paye_ttlesmois.php#Juillet" class="submit">Juillet</a>&nbsp;&nbsp;
	
	</div>
	<br />
	<hr />
	
	
	
	
	
	
	
	
		
		  <?php
		  
		  
$req=mysql_query("SELECT * FROM eleves WHERE Octobre >0 ORDER BY classe DESC") or die ('Erreur requete');
$req1=mysql_query("SELECT * FROM eleves WHERE Novembre >0 ORDER BY classe DESC") or die ('Erreur requete');
$req2=mysql_query("SELECT * FROM eleves WHERE Decembre >0 ORDER BY classe DESC") or die ('Erreur requete');
$req3=mysql_query("SELECT * FROM eleves WHERE Janvier >0 ORDER BY classe DESC") or die ('Erreur requete');
$req4=mysql_query("SELECT * FROM eleves WHERE Fevrier >0 ORDER BY classe DESC") or die ('Erreur requete');
$req5=mysql_query("SELECT * FROM eleves WHERE Mars >0 ORDER BY classe DESC") or die ('Erreur requete');
$req6=mysql_query("SELECT * FROM eleves WHERE Avril >0 ORDER BY classe DESC") or die ('Erreur requete');
$req7=mysql_query("SELECT * FROM eleves WHERE Mai >0 ORDER BY classe DESC") or die ('Erreur requete');
$req8=mysql_query("SELECT * FROM eleves WHERE Juin >0 ORDER BY classe DESC") or die ('Erreur requete');
$req9=mysql_query("SELECT * FROM eleves WHERE Juillet >0 ORDER BY classe DESC") or die ('Erreur requete');
?>








<h1 id="Octobre">Octobre</h1>
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
 while ($row = mysql_fetch_assoc($req)) {
?>
<tr>		
<td><?php echo ''.$row['prenom'].'';?></td>
<td><?php echo ''.$row['nom'].'';?></td>
<td><?php echo ''.$row['classe'].'';?></td>
<td><?php echo ''.$row['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row['Octobre'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>		
	
	
	<br /><br /><br/><hr />
	<h1 id="Novembre">Novembre</h1>
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
if (! $req1) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row1 = mysql_fetch_assoc($req1)) {
?>
<tr>		
<td><?php echo ''.$row1['prenom'].'';?></td>
<td><?php echo ''.$row1['nom'].'';?></td>
<td><?php echo ''.$row1['classe'].'';?></td>
<td><?php echo ''.$row1['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row1['Novembre'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>


<br /><br /><br/><hr />
	<h1 id="Decembre">Decembre</h1>
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
if (! $req2) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row2 = mysql_fetch_assoc($req2)) {
?>
<tr>		
<td><?php echo ''.$row2['prenom'].'';?></td>
<td><?php echo ''.$row2['nom'].'';?></td>
<td><?php echo ''.$row2['classe'].'';?></td>
<td><?php echo ''.$row2['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row2['Decembre'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>


<br /><br /><br/><hr />
	<h1 id="Janvier">Janvier</h1>
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
if (! $req3) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row3 = mysql_fetch_assoc($req3)) {
?>
<tr>		
<td><?php echo ''.$row3['prenom'].'';?></td>
<td><?php echo ''.$row3['nom'].'';?></td>
<td><?php echo ''.$row3['classe'].'';?></td>
<td><?php echo ''.$row3['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row3['Janvier'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>


<br /><br /><br/><hr />
	<h1 id="Fevrier">Fevrier</h1>
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
if (! $req4) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row4 = mysql_fetch_assoc($req4)) {
?>
<tr>		
<td><?php echo ''.$row4['prenom'].'';?></td>
<td><?php echo ''.$row4['nom'].'';?></td>
<td><?php echo ''.$row4['classe'].'';?></td>
<td><?php echo ''.$row4['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row4['Fevrier'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>

<br /><br /><br/><hr />
	<h1 id="Mars">Mars</h1>
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
if (! $req5) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row5 = mysql_fetch_assoc($req5)) {
?>
<tr>		
<td><?php echo ''.$row5['prenom'].'';?></td>
<td><?php echo ''.$row5['nom'].'';?></td>
<td><?php echo ''.$row5['classe'].'';?></td>
<td><?php echo ''.$row5['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row5['Janvier'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>

<br /><br /><br/><hr />
	<h1 id="Avril">Avril</h1>
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
if (! $req6) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row6 = mysql_fetch_assoc($req6)) {
?>
<tr>		
<td><?php echo ''.$row6['prenom'].'';?></td>
<td><?php echo ''.$row6['nom'].'';?></td>
<td><?php echo ''.$row6['classe'].'';?></td>
<td><?php echo ''.$row6['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row6['Avril'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>


<br /><br /><br/><hr />
	<h1 id="Mai">Mai</h1>
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
if (! $req7) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row7 = mysql_fetch_assoc($req7)) {
?>
<tr>		
<td><?php echo ''.$row7['prenom'].'';?></td>
<td><?php echo ''.$row7['nom'].'';?></td>
<td><?php echo ''.$row7['classe'].'';?></td>
<td><?php echo ''.$row7['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row7['Mai'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>

<br /><br /><br/><hr />
	<h1 id="Juin">Juin</h1>
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
if (! $req8) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row8 = mysql_fetch_assoc($req8)) {
?>
<tr>		
<td><?php echo ''.$row8['prenom'].'';?></td>
<td><?php echo ''.$row8['nom'].'';?></td>
<td><?php echo ''.$row8['classe'].'';?></td>
<td><?php echo ''.$row8['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row8['Juin'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>

<br /><br /><br/><hr />
	<h1 id="Juillet">Juillet</h1>
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
if (! $req9) { echo "Aucun r&eacute;sultat"; exit;}

 while ($row9 = mysql_fetch_assoc($req9)) {
?>
<tr>		
<td><?php echo ''.$row9['prenom'].'';?></td>
<td><?php echo ''.$row9['nom'].'';?></td>
<td><?php echo ''.$row9['classe'].'';?></td>
<td><?php echo ''.$row9['sexe'].'';?></td>
<td>Pay&eacute;</td>
<td><?php echo ''.$row9['Juillet'].'';?>&nbsp;FCFA</td>
</tr>
<?php
}
?>			
</table>

























































</body>
</html>
