<?php
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
$date=strftime("%A %d %B"); 
?>
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
                                   
				  <div style="text-align: right;">
				  <span id="date_heure"></span>
            <script type="text/javascript">window.onload = date_heure('date_heure');</script>
				  </div>
          
	  
	  
	  
	  
	 <?php
		$id1=$_GET['id'];
		  
	$req=mysql_query("SELECT * FROM depenses WHERE id=".$_GET['id']) or die ('Erreur requete');

if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
else {
 while ($row = mysql_fetch_assoc($req)) {
?>
	  
	  <div style="text-align: center;">   
<div class='content'>
      <h1 style='color: black; text-align: center; text-decoration: underline;'>Carnet de bord</h1>
<form action='modifier_depense_success.php' method='POST'>
          
             <div class='box'>
    <input type="hidden" name="id" value="<?php echo $id1;?>" />
      Montant de la d&eacute;pense :
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class='field' type='text' name='somme' value="<?php echo ''.$row['somme'].'';?>" ><br /><br />
      Date :
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input class='field' type='text' name='date'  value="<?php echo ''.$row['date'].'';?>" /><br />&nbsp;&nbsp;
      
      
      <div>Commentaire:</div>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <textarea cols="80" rows="10" name="commentaire" value="<?php echo ''.$row['commentaire'].'';?>"></textarea>
        <br />&nbsp;&nbsp;
      
      <input class='btn' type='submit' name='valider' value='Modifier' align='center'>
          <br /><br /><br />
    
    </div>
  </div>
            
            </form>

				 </div>
			
	  
<?php

}
}

?>	  
	  
	  
	  
	  
	  
          <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	  <br /><br /><br /><br /><br /><br /><br />
			
                        <?php include('footer.php');?>
</body>
</html>
