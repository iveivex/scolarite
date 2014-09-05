<?php
  require_once('conn_db.php');
?>

<?php

$mat=$_POST['mat'];

$req= mysql_query("SELECT * FROM eleves WHERE mat=".$mat);
$req1= mysql_query("SELECT * FROM eleves");
$query_soc=$req or die(mysql_error());
$num_photo=$mat.".jpg";
?>

<?php include('menu.php')?>
                  
                                <hgroup>
					
					<br />
		 
				<div align="center">
				  <br /><h2 style='text-decoration:underline; color: black;'>Mensualit&eacute;</h2><br />
				  <table border="1">
				    <tr><th>
			<img src="uploads/<?php echo $num_photo?>"
				  title="<?php echo $num_photo ?>"
				  width="100" height="100"
			/>
				  </th></tr>
				  </table>
				 <?php
				 
				 
				 echo "<form action='paie_success.php' method='post'> <div class='form_settings'>";
				 
				 
				
				 
				 while ($row = mysql_fetch_assoc($req)) {
				 echo "<h2 style='font-weight:bold; text-decoration:underline;'>Pr&eacute;nom : ".$row['prenom']."</h2>";
				 echo "<h2 style='font-weight:bold; text-decoration:underline;'>Nom : ".$row['nom']."</h2>";
				  echo "<h2 style='font-weight:bold; text-decoration:underline;'>Date et lieu de naissance : ".$row['date']." &agrave; ".$row['lieu']."</h2> ";
				echo" <input type='hidden' name='mat' class='field3' value='$mat'/>
		                   ";
				  
				  
				  
			   echo "<h2 style='text-decoration:underline; font-weight:bold;'>Mensualite : 
				 <select name='mois' id='menugsm' class='field3'>
<option>Octobre</option>
<option>Novembre</option>
<option>Decembre</option>
<option>Janvier</option>
<option>Fevrier</option>
<option>Mars</option>
<option>Avril</option>
<option>Mai</option>
<option>Juin</option>
<option>Juillet</option>


  </select></h2>";
			 echo"<h2 style='text-decoration:underline; font-weight:bold;'>Somme v&eacute;rs&eacute;e : <input type='text' name='somme' class='field1' /></h2>
		                   <p><span><input type='submit' style=' text-align:center;' class='submit' value='valider' /></span></p>";
				 }
			
				   ?>
				</div>
				 </form>
				 
		 
				</hgroup>
		<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			<br /><br /><br /><br /><br /><br /><br /><br />	
                        <?php include('footer.php');?>
</body>
</html>
