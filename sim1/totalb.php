<?php
$resultat=mysql_query("select DISTINCT nom_classes from classes ") or die ("requ�te non execut�");
if (! $resultat) { echo "Aucun resultat"; } 


$moiscourant=$tab[$date];
/*on fait la somme */
$sql = mysql_query("SELECT SUM(somme) AS total FROM depenses");

$totaldepense= mysql_result($sql,0);


?>



<?php
/*On compte le nombre de lignes*/
$req= mysql_query("SELECT mat FROM eleves where classe=''");
$query_soc=$req or die(mysql_error());
$nblignes=mysql_num_rows($req);



?>



<?php echo $totaldepense;?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFA";?>

