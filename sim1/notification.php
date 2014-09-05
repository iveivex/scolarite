<script>
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
      
      <h3 id="notice_title_@">Inscription r&eacute;ussie !!!
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <img src="uploads/delete.png" onclick="deleteNotice(@);"/></h3>
      <hr />
      <br /><br />
      <div align="center" style="float: left;">
	      <table border="0.3">
				    <tr><th>
                       <img id="notice_img_@" src="uploads/<?php echo $num_photo?>"
				  title="<?php echo $num_photo ?>" alt="" width="100px" height="100px"/>
				  
				    </th></tr>
	      </table>
      	
     <p id="notice_text_@">
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
			
			
			
				 
			</div>
			      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				   <p style="text-align: center;">
				        <span style="color:green; text-decoration: underline;"><?php echo"$pr $n";?> </span>
				        <span>a bien &eacutet&eacute; inscrit(e) en <br />Classe de</span>
					<span style="color: green; text-decoration: underline;"> <?php echo $cl?></span><br />
				   
				        <span style="color:green; text-decoration: underline;">Matricule=<?php echo $nblignes?></span>
				   </p>
                                                              
			      </div>
                                                              
                        

	
      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      </p>
       
    </content>
    
  </div>
</content>
