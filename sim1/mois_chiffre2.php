<?php
  require_once('conn_db.php');
extract($_GET);
$mois1=$_GET['mois'];
?>


<?php include('menu.php');?>


<hgroup>
					<?php include('menu_compta.php');?>
				</hgroup>

		  <h1  style="font-weight: bold; text-transform:uppercase;">
		 
		 
		 
		 
		 
		 
		 
		 
		 
	<?php
$date =date("n");

?>	 
		
		 <?php

		  $tab= array ('Janvier', 'F&eacute;vrier', 'Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','D&eacute;cembre');
               
		 ?>
		
		 <h2>
		  Chiffres du mois : <?php echo $_GET['mois'];?></h2><br />
	<a href="chiffreannee.php">Retourner &agrave; la page pr&eacute;cedente</a>
	<hr />
	
	
	
	
	
	
	
	
	
	
	
	
		  <?php
		  
	$req=mysql_query("SELECT * FROM eleves ORDER BY Classe DESC") or die ('Erreur requete');
?>

<table border='1' width='80%'>


<tr>
  
    <?php
$connexion=mysql_connect("localhost","root","") or die ("connexion impossible.");
$db=mysql_select_db('projet',$connexion) or die ("base de données non accessible pour le moment");
?></span></p><br />

<tr>
<td></td>
  <th>Effectif total par classe</th>
  <th>Montant encaiss&eacute (<?php echo $_GET['mois'];?>)</th>
</tr>
	  <?php
		  
	$req=mysql_query("SELECT * FROM eleves ORDER BY Classe DESC") or die ('Erreur requete');
?>
<?php

$moiscourant=$tab[$date];
/*on fait la somme */
$sql = mysql_query("SELECT SUM(".$mois1.") AS total FROM eleves");
$somme = mysql_result($sql,0);
?>

<?php
include('classes/classes/6eme.php');
include('classes/classes/5eme.php');
include('classes/classes/4eme.php');
include('classes/classes/3eme.php');
include('classes/classes/2ndeL.php');
include('classes/classes/2ndeS.php');
include('classes/classes/1ereL2.php');
include('classes/classes/1ereS2.php');
include('classes/classes/TL1.php');
include('classes/classes/TL2.php');
include('classes/classes/TL\'.php');
include('classes/classes/TS1.php');
include('classes/classes/TS2.php');
include('classes/classes/TG.php');
?>



	<tr>
<td colspan="2"></td>

 <th>TOTAL =
    <?php
     include('total1.php');
    ?>
 </th>
 
</tr>
	 
<?php
mysql_close($connexion);
?>
			
</table>		
	
</body>
</html>
