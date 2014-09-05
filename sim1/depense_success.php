<?php
  require_once('conn_db.php');
?>

<?php
extract($_POST);
?>

			
		      

<?php
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
$sql = "INSERT INTO depenses (id,somme,date,commentaire,mois) VALUES ('','$_POST[somme]','$_POST[date]','$_POST[commentaire]','$_POST[mois]') ";
//Recherche des données
$sth = $dbh->query($sql);



echo $_POST['somme']."<br />";
echo $_POST['date']."<br />";
echo $_POST['commentaire']."<br />";

?>



  
</body>
</html>
