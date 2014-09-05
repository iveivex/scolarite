 <?php
  require_once('conn_db.php');

?>

  
		  <head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<style type="text/CSS">
#menu {
height:50px;

}
#menu ul {
margin:0;
padding:0;
list-style-type:none;
text-align:center;
}
#menu li {
float:left;
margin:auto;
padding:0;
background-color:gray;
}
#menu li a {
display:block;
width:200px;
color:white;
text-decoration:none;
padding:5px;
}
#menu li a:hover {
color:white;
background-color:darkgray;
}
#menu ul li ul {
display:none;
}
#menu ul li:hover ul {
display:block;
}
#menu li:hover ul li {
float:none;
}

</style>
<!--[if !IE]> <-->
<style type="text/CSS">
#menu li ul {
position:absolute;
}
</style>
<!--> <![endif]-->
<!--[if IE 8]>
<style type="text/CSS">
#menu li ul {
position:absolute;
}
</style>
<![endif]-->
</head>
		   <?php
                          include('menu.php');
                  ?>
		   
                                <hgroup style="text-align: center;">
				  
				  <?php include('menu_compta.php');?>

<hgroup>
					
					<div id="main">
   
      
   </div>
				</hgroup>

			  <?php extract($_POST);?>
		  <h1  style="font-weight: bold; text-transform:uppercase;">
		 
		  D&eacute;penses effectu&eacute;s</h2><br />
	
	<hr />
	
	
	
	
	
	  
		 
	
	<form action="historique_mois.php" method="GET" id="search_form" style="font-weight: bold; text-transform:uppercase; text-align: right; display: inline;" >
		 
		
		 
		    Mois : 
		<select name='mois' id='menugsm' class='field3'>
<option>S&eacute;l&eacute;ctionner</option>
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
		
		
		 <input type="submit" class="submit" value='Valider'/>
		
		
		
		  
		  
		  </form>
	
	
	
	
	
	
	
	<br />
		  <?php
		  $req=mysql_query("SELECT * FROM depenses") or die ('Erreur requete');
?>



<table border='1' width='80%'>

<tr>
  <th>Num. de s&eacute;quence</th>
<th>Somme</th>
<th>Date</th>
<th>Commentaire</th>


</tr>

<?php
if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
else {
 while ($row = mysql_fetch_assoc($req)) {
?>

<tr>
  <td><?php echo ''.$row['id'].'';?></td>
<td><?php echo ''.$row['somme'].'';?></td>
<td><?php echo ''.$row['date'].'';?></td>
<td><?php echo ''.$row['commentaire'].'';?></td>



</tr>

<?php
}
}

?>
		
			
</table>		
	
</body>
</html>
