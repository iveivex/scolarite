<?php
$resultat=mysql_query("select DISTINCT nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat"; } 


$moiscourant=$tab[$date];
/*on fait la somme */
$sql = mysql_query("SELECT SUM(Octobre+Novembre+Decembre+Janvier+Fevrier+Mars+Avril+Mai+Juin+Juillet) AS total FROM eleves");

$totalencaisse=mysql_result($sql,0);


?>



<?php
/*On compte le nombre de lignes*/
$req= mysql_query("SELECT mat FROM eleves where classe=''");
$query_soc=$req or die(mysql_error());
$nblignes=mysql_num_rows($req);



?>



<?php echo $totalencaisse;?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFA";?>


