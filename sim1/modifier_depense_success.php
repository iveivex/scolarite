<?php
  require_once('conn_db.php');
  ?>
	 <?php
		  
	$req=mysql_query("SELECT * FROM depenses WHERE id=".$_POST['id']) or die ('Erreur requete');

if (! $req) { echo "Aucun r&eacute;sultat"; exit;}
else {
 while ($row = mysql_fetch_assoc($req)) {
?>
<?php
}

}

extract($_POST);
$res=$_POST['id'];
$sql = "UPDATE depenses SET
        somme='$_POST[somme]',date='$_POST[date]',commentaire='$_POST[commentaire]' WHERE id=$res" ;
$sql=mysql_query($sql) or die(mysql_error());
header("location:historique.php");

?>


<?php include('menu.php');?>

   
	  <div id="sidebar_container">
         <div class="sidebar"></div>
        </div>
	 
	  
      <div id="content">
        
	
			
			
			
	</div>

















<script type="text/javascript">
/* test */
$(document).ready(function(){
  for(i=0;i<1;i++){
    createNotice('https://developers.google.com/_static/af26327896/images/developers-logo.svg', 'Inscription r&eacute;ussie !!!',
                 'sbshdb');
  }
});
</script>


<content id="notice_template" style="display:none;width:0;height:0;left:-9999px;position:absolute;">
  <div id="notice_@" class="notice">
    <header>
    </header>
     <content>
      
      <h3 id="notice_title_@">Informations
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <a href="modifier.php"><img src="uploads/delete.png" onclick="deleteNotice(@);" /></a></h3>
      <hr />
      <br /><br />
      <div align="center" style="float: left;">
	      
      	
     <p id="notice_text_@">
      
				 
			</div>
			      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <p style="text-align: center; font-size: large;">
				        Modification effectu&eacute;e avec succ&egrave;s !!!
				   </p>
                                                              
			      </div>
                                                              
           
      </div>

      </p>
       
    </content>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <br /><br /><br /><br /><br /><br />
 <h3 style="text-align: center;">Patientez ...</h3>  
  </div>
  
</content>
  

    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	
	  
	  
 <?php include('footer.php');
 

 ?>
    
  
</body>
</html>
