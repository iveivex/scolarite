<?php
  require_once('conn_db.php');
?>

<?php

$req= mysql_query("SELECT * FROM eleves");
$query_soc=$req or die(mysql_error());

?>

<?php include('menu.php');?>
<h2  style="font-weight: bold; text-transform:uppercase; text-decoration: underline;">
		  Non en r&egrave;gle avec la comptabilit&eacute;
</h2>
<br />
	<hr />
	          
		  <h3 style="text-align: center;"><a href="impaye_ttlesmois.php" >Afficher tous les mois</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 </h3>
		  
	 <hr />
		  <div align="center"><br /><br />
		   
		 <h3 style="text-decoration: underline; text-align: center;">S&eacute;l&eacute;ctionnez le mois :
		 <form action="impaye.php" method="POST" id="search_form" >
		 
		 
		 
		 
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
		  
		  
		  </form>
		 </h3>
		 </div>
                     
			<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
		      
		    <?php include('footer.php')?>			
</body>
</html>
