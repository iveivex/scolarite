<?php
$resultat=mysql_query("select DISTINCT nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat"; } 


$moiscourant=$tab[$date];
/*on fait la somme */
$sql = mysql_query("SELECT SUM(".$mois1.") AS total FROM eleves");
$somme = mysql_result($sql,0);
?>



<?php

/*On compte le nombre de lignes*/
$req= mysql_query("SELECT mat FROM eleves");
$query_soc=$req or die(mysql_error());
$nblignes=mysql_num_rows($req);



?>



<?php echo $somme;?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFA";?>


</tr>
