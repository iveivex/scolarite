<?php
$resultat=mysql_query("select DISTINCT nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat"; } 


/*on fait la somme */
$sql = mysql_query("SELECT SUM(Octobre+Decembre+Janvier+Fevrier+Mars+Avril+Mai+Juin+Juillet) AS total FROM eleves");
$somme = mysql_result($sql,0);
?>



<?php
/*On compte le nombre de lignes*/
$req= mysql_query("SELECT mat FROM eleves");
$query_soc=$req or die(mysql_error());
$nblignes=mysql_num_rows($req);



?>



<?php echo $somme;?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;";?>


</tr>
