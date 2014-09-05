<?php

$moiscourant=$tab[$date];
/*on fait la somme */
$sql = mysql_query("SELECT SUM(somme) FROM depenses WHERE mois='Fevrier'");
$somme1= mysql_result($sql,0);
?>


<?php echo $somme1;?><?php echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFA";?>
