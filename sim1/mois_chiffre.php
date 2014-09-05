<?php
  require_once('conn_db.php');
extract($_GET);
$mois1=$_GET['mois'];
?>


<?php include('menu.php');?>


<hgroup>
					<div id="main">
   
      <div id="menubar">
	
	
<ul id="menu">
	<li><a href="recent.php">Derni&egrave;res op&eacute;rations</a></li>
	<li>
		<a>Mes Chiffres</a>

		<ul>
			<li>
				<a href="specifier_mois_chiffre.php">Par mois</a>

							
			</li>
			<li>
				<a href="chiffreannee.php">Toute l'ann&eacute;e</a>
			
			</li>
			
			
			
			
		</ul>
	</li>
	<li>
		<a>D&eacute;penses</a>

		<ul>
			<li>
				 <a href="historique.php">Historique</a>
			</li>
                        <li>
                                 <a href="specifier_depense.php">Enregistrer une dépense</a>
                        </li>
			<li>
                                  <a href="modifier_depense.php">Modifier une dépense</a>

                        </li>
			
		</ul>					
	</li>
			
			
			
			<li>
		<a href="calculatrice.php">calculatrice</a>

		<ul>
			<li>
				 <a href="historique.php">Historique</a>
			</li>
                        <li>
                                 <a href="specifier_depense.php">Enregistrer une dépense</a>
                        </li>
			<li>
                                  <a href="modifier_depense.php">Modifier une dépense</a>

                        </li>
			
		</ul>					
	</li>
			
			
			
			
			
</ul>
      
      </div>
   </div>
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
	<a href="specifier_mois_chiffre.php">Retourner &agrave; la page pr&eacute;cedente</a>
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
  <th>Montant depens&eacute;</th>
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
 <th>TOTAL =
  <?php
     include('totaldepenseparmois.php');
    ?>
 </th>
</tr>
	 

			
</table>		
	
</body>
</html>
