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
	
		  <?php
		  
	$req=mysql_query("SELECT * FROM depenses") or die ('Erreur requete');
?>



<table border='1' width='80%'>

<tr>
  <th>Num. de s&eacute;quence</th>
<th>Somme</th>
<th>Date</th>
<th>Commentaire</th>
<th>Modification</th>

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

<td><a href="editer_depense.php?id=<?php echo ''.$row['id'].'';?>">Modifier</a></td>


</tr>

<?php
}
}

?>
		
			
</table>		
	
</body>
</html>
