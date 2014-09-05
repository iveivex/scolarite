<?php
  require_once('conn_db.php');

?>

<?php

$req= mysql_query("SELECT * FROM eleves");
$query_soc=$req or die(mysql_error());

?>

<?php include('menu.php');?>

<h1 style="text-decoration: underline; display: inline;">Mois : </h1>
<h1 style="display: inline; color: green;"><?php echo $_POST['mois']; ?><h1> <h2 align="left" style="text-decoration: underline; display: inline;">

		  <div align="center"><br /><br />
		    
		 <h2 style="text-decoration: underline;">S&eacute;l&eacute;ctionnez la classe :</h2>
	
		 <form action="impaye2.php" method="POST">
		  <input type="hidden" value="<?php echo $_POST['mois'];?>" name="mois">
		<p><span>
      
      
    <?php
$connexion=mysql_connect("localhost","root","") or die ("connexion impossible.");
$db=mysql_select_db('projet',$connexion) or die ("base de données non accessible pour le moment");
?></span></p><br />
      
<p><span style="text-decoration: underline;">Classe :

  <select name='classe' id="menugsm" >
<?php
$resultat=mysql_query("select nom_classes from classes ") or die ("requète non executé");
if (! $resultat) { echo "Aucun resultat"; } 
while ($ligne=mysql_fetch_array($resultat))
{
?>
<option><?php echo $ligne['nom_classes'];?> </option>
<?php
}
mysql_close($connexion);
?>
  </select></span>
  
  </p>
<input type="hidden" name="class" value="<?php echo $ligne['nom_classes'];?>" />

		 <p><span><input type="submit" class="submit" value='Valider'/></span></p>
		
		
		  
		  </form>
		 </h1>
		 </div>
                     
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
		      <?php echo $_POST['mois']; ?>
		    <?php include('footer.php')?>			
</body>
</html>
