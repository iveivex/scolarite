<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
  <title>Administration</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <!-- Feuille de style -->
	<link rel="stylesheet" href="styleNotification.css" />
	
	<!-- jQuery  -->
	<script src="jquery.js"></script>
<link rel="stylesheet" href="UIKit.css" />
 <script type="text/javascript" src="calculatrice.js"></script>
        <link rel="stylesheet" media="screen, print, handheld" type="text/css" href="calculatrice.css" />
<link rel="stylesheet" href="styleNotification.css" />
	<!-- UIKit  -->
	<script src="UIKit.js"></script>
	<?php echo"
	<script type='text/javascript'>

   

  function cre_cook0(nom,contenu) {
      document.cookie = nom + '=' + escape(contenu)
      }

   function cre_cook(nom,contenu,jours) {
      var expireDate = new Date();
      expireDate.setTime(expireDate.getTime() + jours*24*3600*1000);
      document.cookie = nom + '=' + escape(contenu)
         + ';expires=' + expireDate.toGMTString();
      }
     
   function lit_cook(nom) {
      var deb,fin
      deb = document.cookie.indexOf(nom + '=')
      if (deb >= 0) {
         deb += nom.length + 1
         fin = document.cookie.indexOf(';',deb)
         if (fin < 0) fin = document.cookie.length
         return unescape(document.cookie.substring(deb,fin))
         }
      return ''
      }
     
    function tue_cook(nom) { cre_cook(nom,'',-1) }

	
   




</script>


";
?>
	<link rel="stylesheet" href="UIKit.css" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="joomla, Joomla, NGMenu, menusystem for joomla" />
  <meta name="title" content="Accordian Hover Menus (vertical)" />
  <meta name="author" content="Administrator" />
  <meta name="description" content="Joomla! - the dynamic portal engine and content management system" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
    <link rel="stylesheet" type="text/css" href="style.css" />

  
  <link rel="stylesheet" type="text/css" href="style/style.css" />
   <link rel="stylesheet" type="text/css" href="style/menucss.css" />
<link rel="stylesheet" href="lay46.css" type="text/css" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- devrait être : 
  <script src="plugins/notice/notice.js"></script> 
--> 
<script> 
  /* id automatique */
  var __id_notice = 0;

  /* crée une notice */
  function createNotice(img, title, text)
  {
    // incrementation de l'auto id
    __id_notice++;
    
    // récupération du template HTML de la notice
    var tpl = $('#notice_template').html();
    
    // insertion de l'id
    tpl = tpl.replace(/@/g, ''+__id_notice);
    
    // insertion du src de l'image
    tpl = tpl.replace('%%notice_img_src%%', img);
    // insertion du titre
    tpl = tpl.replace('%%notice_title%%', title);
    // insertion du texte
    tpl = tpl.replace('%%notice_text%%', text);
    
    // affichage dans l'objet notice_screen 
    // (changer selon... pourrait être body par exemple)
    $('#body').append( tpl );
    
    // retourne l'id de la boite
    return __id_notice;
  }

  /* efface une notice */
  function deleteNotice(id){
    /* parce qu'un fade out c'est super sympa */
    $('#notice_'+id).fadeOut(200, function(){
      /* et on kick la node html */
      $('#notice_'+id).remove();
    });
  }
  
  /* charge une notice depuis un fichier 
     peut etre txt, csv, json, ou généré par php etc.
  */
  function loadNotice(){
   $.ajax({
      type: "GET",
      url: 'plugins/notice/notice_abc.txt',
      success: function(result){ 
        // on retourne une chaine CSV par exemple
        // image|titre|texte
        var t = result.split('|'); 
        if(t.length == 3)
        {
          /* on crée la notice */
          createNotice(t[0], t[1], t[2]);
        }
      },
      error: function(){
        /* en cas d'erreur */
      }
    });

  }
</script>

<!-- devrait être : 
  <link href="plugins/notice/notice.css" rel="stylesheet"/> 
-->
<style>
/* Styles pour notice */
.notice {
width: 330px;
height: 150px;
padding: 8px;
background-color: #00CC00;
box-shadow: 0 0 250px darkgreen;
position: fixed;
z-index: 10000;
display: inline;
margin: auto;
top: 0;
left: 0;
right: 0;
bottom: 0;
}


.notice1 {
width: 330px;
height: 210px;
padding: 8px;
background-color: #00CC00;
box-shadow: 0 0 250px darkgreen;
position: fixed;
z-index: 10000;
display: inline;
margin: auto;
top: 0;
left: 0;
right: 0;
bottom: 0;
}


.notice header{
}
.notice content{
}
.notice content > img{
  max-width:320px;
  height:32px;
}
.notice content > h3{
}
.notice content > p{
  overflow:auto;
  max-height:480px;
}
.notice footer{
		
}
</style>


<script type="text/javascript">
		
		function date_heure(id)
{
        date = new Date;
        annee = date.getFullYear();
        moi = date.getMonth();
        mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
        j = date.getDate();
        jour = date.getDay();
        jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        resultat = jours[jour]+' '+j+' '+mois[moi]+' '+annee+' il est '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = resultat;
        setTimeout('date_heure("'+id+'");','1000');
        return true;
}

</script>
<script type="text/javascript" src="jquery-latest.min.js"></script>
    <script type="text/javascript">
        $(function() {
          if ($.browser.msie && $.browser.version.substr(0,1)<7)
          {
			$('li').has('ul').mouseover(function(){
				$(this).children('ul').show();
				}).mouseout(function(){
				$(this).children('ul').hide();
				})
          }
        });        
    </script>
	
<style>
body
{
	background: url("uploads/grid.png") repeat scroll 0 0 #F5F5F5;
	
	margin: 40px auto;
}

/* Main menu */

#menu
{
	width: 80%;
	margin: 0;
	padding: 10px 0 0 0;
	list-style: none;  
	background: #111;
	background: -moz-linear-gradient(#444, #111); 
    background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));	
	background: -webkit-linear-gradient(#444, #111);	
	background: -o-linear-gradient(#444, #111);
	background: -ms-linear-gradient(#444, #111);
	background: linear-gradient(#444, #111);
	-moz-border-radius: 50px;
	border-radius: 50px;
	-moz-box-shadow: 0 2px 1px #9c9c9c;
	-webkit-box-shadow: 0 2px 1px #9c9c9c;
	box-shadow: 0 2px 1px #9c9c9c;
}

#menu li
{
	float: left;
	padding: 0 0 10px 0;
	position: relative;
	line-height: 0;
}

#menu a 
{
	float: left;
	height: 25px;
	padding: 0 25px;
	color: #999;
	text-transform: uppercase;
	font: bold 12px/25px Arial, Helvetica;
	text-decoration: none;
	text-shadow: 0 1px 0 #000;
}

#menu li:hover > a
{
	color: #fafafa;
}

*html #menu li a:hover /* IE6 */
{
	color: #fafafa;
}

#menu li:hover > ul
{
	display: block;
}

/* Sub-menu */

#menu ul
{
    list-style: none;
    margin: 0;
    padding: 0;    
    display: none;
    position: absolute;
    top: 35px;
    left: 0;
    z-index: 99999;    
    background: #444;
    background: -moz-linear-gradient(#444, #111);
    background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
    background: -webkit-linear-gradient(#444, #111);    
    background: -o-linear-gradient(#444, #111);	
    background: -ms-linear-gradient(#444, #111);	
    background: linear-gradient(#444, #111);
    -moz-box-shadow: 0 0 2px rgba(255,255,255,.5);
    -webkit-box-shadow: 0 0 2px rgba(255,255,255,.5);
    box-shadow: 0 0 2px rgba(255,255,255,.5);	
    -moz-border-radius: 5px;
    border-radius: 5px;
}

#menu ul ul
{
  top: 0;
  left: 150px;
}

#menu ul li
{
    float: none;
    margin: 0;
    padding: 0;
    display: block;  
    -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
    -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
    box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
}

#menu ul li:last-child
{   
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;    
}

#menu ul a
{    
    padding: 10px;
	height: 10px;
	width: 130px;
	height: auto;
    line-height: 1;
    display: block;
    white-space: nowrap;
    float: none;
	text-transform: none;
}

*html #menu ul a /* IE6 */
{    
	height: 10px;
}

*:first-child+html #menu ul a /* IE7 */
{    
	height: 10px;
}

#menu ul a:hover
{
    background: #0186ba;
	background: -moz-linear-gradient(#04acec,  #0186ba);	
	background: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
	background: -webkit-linear-gradient(#04acec,  #0186ba);
	background: -o-linear-gradient(#04acec,  #0186ba);
	background: -ms-linear-gradient(#04acec,  #0186ba);
	background: linear-gradient(#04acec,  #0186ba);
}

#menu ul li:first-child > a
{
    -moz-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
}

#menu ul li:first-child > a:after
{
    content: '';
    position: absolute;
    left: 30px;
    top: -8px;
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid #444;
}

#menu ul ul li:first-child a:after
{
    left: -8px;
    top: 12px;
    width: 0;
    height: 0;
    border-left: 0;	
    border-bottom: 5px solid transparent;
    border-top: 5px solid transparent;
    border-right: 8px solid #444;
}

#menu ul li:first-child a:hover:after
{
    border-bottom-color: #04acec; 
}

#menu ul ul li:first-child a:hover:after
{
    border-right-color: #04acec; 
    border-bottom-color: transparent; 	
}


#menu ul li:last-child > a
{
    -moz-border-radius: 0 0 5px 5px;
    border-radius: 0 0 5px 5px;
}

/* Clear floated elements */
#menu:after 
{
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}

* html #menu             { zoom: 1; } /* IE6 */
*:first-child+html #menu { zoom: 1; } /* IE7 */
</style>

<!-- AdPacks -->
<style>
#adpacks-wrapper{font-family: Arial, Helvetica;width:280px;position: fixed;_position:absolute;bottom: 0;right: 20px;z-index: 9999;background: #eaeaea;padding: 10px;-moz-box-shadow: 0 0 15px #444;-webkit-box-shadow: 0 0 15px #444;box-shadow: 0 0 15px #444;}
body .adpacks{background:#fff;padding:15px;margin:15px 0 0;border:3px solid #eee;}
body .one .bsa_it_ad{background:transparent;border:none;font-family:inherit;padding:0;margin:0;}
body .one .bsa_it_ad .bsa_it_i{display:block;padding:0;float:left;margin:0 10px 0 0;}
body .one .bsa_it_ad .bsa_it_i img{padding:0;border:none;}
body .one .bsa_it_ad .bsa_it_t{padding: 0 0 6px 0; font-size: 11px;}
body .one .bsa_it_p{display:none;}
body #bsap_aplink,body #bsap_aplink:hover{display:block;font-size:9px;margin: -15px 0 0 0;text-align:right;}
body .one .bsa_it_ad .bsa_it_d{font-size: 11px;}
body .one{overflow: hidden}
</style>



</head>

<body class="background" id="body" style="background: url("uploads/grid.png") repeat scroll 0 0 #F5F5F5;">
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Administration Scolarit&eacute;<span class="logo_colour"></span></a></h1>
          <h2>Omega Inc.</h2>
        </div>
      </div>
      
      
    </div>
    
    
       <div id="content_header"></div>
    <div id="site_content">
     
	  <div id="sidebar_container">
        
        <div class="sidebar">
          
          <div class="sidebar_item" style="text-align: center; text-decoration: underline;">
            <h3>Menu</h3>
	  
	    
	    
	    
	    
	    
	    
	    
<table border="0" cellpadding="1" cellspacing="1" style="width: 200px;">
	<tbody>
		<tr>
				
			
				<div id="ngcont46">
					<ul id="ng46">
						<li class="sub1 istylem656">
							<div>
								<a class="ngmitem istylei659" href="index.php" target="_self">Acceuil</a>
								<a class="ngsitem istylei671" href="index.php" target="_self">Deconnexion</a>
						        </div>
							
						</li>
						<li class="sub2 istylem657">
							<div>
								<a class="ngmitem istylei659" target="_self">Scolarit&eacute;</a>
								
								<a class="ngsitem istylei668" href="enregistrer.php" target="_self">Enregistrer</a>
								<a class="ngsitem istylei668" href="specifier_paye.php" target="_self">Pay&eacute;s</a>
								<a class="ngsitem istylei668" href="specifier_impaye.php" target="_self">Impay&eacute;s</a>
							</div>
							
						</li>
						<li class="sub3 istylem658">
							<div>
								<a class="ngmitem istylei659" target="_self" id="divers">Divers</a>
								
								<a class="ngsitem istylei668" href="form_mail.php" target="_self">Envoyer un mail</a>
								
								<a class="ngsitem istylei671" href="specifier_sms.php" target="_self">Envoyer des sms</a>
								
							</div>
						</li>
						<li class="sub4 istylem659">
							<div>
								<a class="ngmitem istylei659" target="_self" id="divers">Gestion</a>
								<a class="ngsitem istylei668" href="liste.php" target="_self">Liste</a>
								<a class="ngsitem istylei671" href="inscription.php" target="_self">Inscription</a>
								<a class="ngsitem istylei671" href="Modifier.php" target="_self">Modifier</a>
								<a class="ngsitem istylei671" href="supprimer.php" target="_self">Supprimer</a>
								<a class="ngsitem istylei671" href="compta.php" target="_self">Espace comptable</a>
						        </div>
						</li>
					</ul>
				</div>
			
		</tr>
	</tbody>
</table>
	     
     
     
     
     
     
     
     
     
     
     
     
          </div>
          <div class="sidebar_base"></div>
        </div>
        
      </div>
	  
    