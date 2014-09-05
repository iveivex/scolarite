<?php
  require_once('conn_db.php');
extract($_POST);

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
		
		 <h2 style="text-decoration: underline;">
		  Chiffres</h2><br />
	<a href="specifier_mois_chiffre.php">Retourner &agrave; la page pr&eacute;cedente</a>
	<hr />
	
	
	
	
	
	
	
	
	
	
	
	
		  <?php
		  
	$req=mysql_query("SELECT * FROM eleves ORDER BY Classe DESC") or die ('Erreur requete');
?>

<table border='1' width='80%'>


<tr>
  
    <?php
$connexion=mysql_connect("localhost","root","") or die ("connexion impossible.");
$db=mysql_select_db('projet',$connexion) or die ("base de donn&eacute;es non accessible pour le moment");
?></span></p><br />

<td style="background-color: white; border-color: white;"></td>
  <th>Montant total encaiss&eacute;</th>
  <th>Montant total D&eacute;pens&eacute; </th>
   <th>Diff&eacute;rence</th>
</tr>
	  <?php
		  
	$req=mysql_query("SELECT * FROM eleves ORDER BY Classe DESC") or die ('Erreur requete');
?>
<?php

include('totalttlesmois.php');
?>


			<tr>
			        <th>Octobre</th>
				<td><?php include('totaloctobre.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Octobre';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepenseoctobre.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Octobre';?>">details</a>
				    </span>
				</td>		    
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			
			
			<tr>
			        <th>Novembre</th>
				<td><?php include('totalnovembre.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Novembre';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensenovembre.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Novembre';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			
			
			<tr>
			        <th>Decembre</th>
				<td><?php include('totaldecembre.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Decembre';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensedecembre.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Decembre';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			
			
			<tr>
			        <th>Janvier</th>
				<td><?php include('totaljanvier.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Janvier';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensejanvier.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Janvier';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			<tr>
			        <th>F&eacute;vrier</th>
				<td><?php include('totalfevrier.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Fevrier';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensefevrier.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Fevrier';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			<tr>
			        <th>Mars</th>
				<td><?php include('totalmars.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Mars';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensemars.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Mars';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			<tr>
			        <th>Avril</th>
				<td><?php include('totalavril.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Avril';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepenseavril.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Avril';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			<tr>
			        <th>Mai</th>
				<td><?php include('totalmai.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Mai';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensemai.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Mai';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr> 
			<tr>
			        <th>Juin</th>
				<td><?php include('totaljuin.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Juin';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensejuin.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Juin';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			<tr>
			        <th>Juillet</th>
				<td><?php include('totaljuillet.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="mois_chiffre2.php?mois=<?php echo 'Juillet';?>">details</a>
				    </span>
				</td>
				<td><?php include('totaldepensejuillet.php');?>
				    <span style="display: inline; float: right; text-align: right;">
				       <a href="historique_mois.php?mois=<?php echo 'Juillet';?>">details</a>
				    </span>
				</td>
				<td><?php echo ($somme-$somme1);?> FCFA</td>
			</tr>
			
			<tr>
                               <td style="background-color: white; border-color: white;"></td>
                               <th>TOTAL =<?php include('totala.php');?></th>
			       <th>TOTAL =<?php include('totalb.php');?></th>
                               <th>TOTAL = <?php echo ($totalencaisse-$totaldepense);?> FCFA</th>
                        </tr>
		      
			
</table>		
	<?php
mysql_close($connexion);
?>
</body>
</html>
