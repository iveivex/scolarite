<?php
$resultat=mysql_query("select DISTINCT nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat";} 


$moiscourant=$tab[$date];
/*on fait la somme */
$sql = mysql_query("SELECT SUM(".$mois1.") AS total FROM eleves WHERE classe='TL\''");
$somme = mysql_result($sql,0);
?>



<?php
/*On compte le nombre de lignes*/
$req= mysql_query("SELECT mat FROM eleves where classe='TL\''");
$query_soc=$req or die(mysql_error());
$nblignes=mysql_num_rows($req);
?>







<tr style="text-align: center;"><th><?php echo "TL\'" ?></th>
<td><?php echo $nblignes;?></td>
<td><?php echo $somme;?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFA";?></td>
</tr>


</tr>
