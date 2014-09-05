<?php
  require_once('conn_db.php');
session_start();//lancement de la session
 if(isset($_SESSION['login']))//test d'authentification
{	
    header("location:enregister.php");//redirection
    exit();
}

?>

<?php

$req= mysql_query("SELECT * FROM eleves");
$query_soc=$req or die(mysql_error());

?>

<?php include('menu.php');?>
<h2  style="font-weight: bold; text-transform:uppercase; text-decoration: underline;">
		  El&egrave;ves en r&egrave;gle avec la comptabilit&eacute;
</h2>
<br />
	
	<hr />
	          
		  <h3><a href="paye_ttlesmois.php">Afficher tous les mois</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <a href="searchparclass.php">Chercher par classe</a></h3>
		  
	 <hr />
		  
		 <h3 style="text-decoration: underline; text-align: center;">S&eacute;l&eacute;ctionnez le mois:
		 <form action="paye.php" method="POST" id="search_form" >
		 
		 
		 
		 
		  <div class="form_settings">
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
<option>Aout</option>
<option>Septembre</option>

		</select>
		
		
		
		<br /><br /><br />
		 <p><span><input type="submit" class="submit" value='Valider'/></span></p>
		
		
		  </div>
		  <br /> <br /> <br /> <br />
		 
		  </form>
		 </h3>
		 
                     
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
		      
		    <?php include('footer.php')?>			
</body>
</html>
