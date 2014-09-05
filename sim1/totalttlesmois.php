<?php
$resultat=mysql_query("select DISTINCT nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat"; } 


$moiscourant=$tab[$date];
/*on fait la somme */

$user = 'root';
$pass = '';
// Data Source Name
$dsn = 'mysql:host=localhost;dbname=projet';
try{ //tentative de connexion : on crée un objet de la classe PDO
$dbh= new PDO($dsn, $user, $pass);
//S'il y a des erreurs de connexion, un objet PDOException est
// lancé. Vous pouvez attraper cette exception si vous voulez
// gérer cette erreur
} catch (PDOException $e){
print "Erreur ! :" . $e->getMessage() . "<br/>";
die();
}
$sql = "SELECT SUM(*) AS total FROM eleves";
//Recherche des données
$sth = $dbh->query($sql);

?>



<?php
/*On compte le nombre de lignes*/
$req= mysql_query("SELECT mat FROM eleves where classe=''");
$query_soc=$req or die(mysql_error());
$nblignes=mysql_num_rows($req);



?>



</tr>
