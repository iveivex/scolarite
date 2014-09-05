
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />
    <title>Un menu d�roulant en CSS3</title>
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
	width: 960px;
	margin: 40px auto;
}

/* Main menu */

#menu
{
	width: 100%;
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
<body>
    
<ul id="menu">
	<li><a href="http://www.red-team-design.com/">Home</a></li>
	<li>
		<a href="#">Categories</a>
		<ul>
			<li>
				<a href="#">CSS</a>
				<ul>
					<li><a href="#">Item 11</a></li>
					<li><a href="#">Item 12</a></li>
					<li><a href="#">Item 13</a></li>
					<li><a href="#">Item 14</a></li>
				</ul>				
			</li>
			<li>
				<a href="#">Graphic design</a>
				<ul>
					<li><a href="#">Item 21</a></li>
					<li><a href="#">Item 22</a></li>
					<li><a href="#">Item 23</a></li>
					<li><a href="#">Item 24</a></li>
				</ul>				
			</li>
			<li>
				<a href="#">Development tools</a>
				<ul>
					<li><a href="#">Item 31</a></li>
					<li><a href="#">Item 32</a></li>
					<li><a href="#">Item 33</a></li>
					<li><a href="#">Item 34</a></li>
				</ul>				
			</li>
			<li>
				<a href="#">Web design</a>				
				<ul>
					<li><a href="#">Item 41</a></li>
					<li><a href="#">Item 42</a></li>
					<li><a href="#">Item 43</a></li>
					<li><a href="#">Item 44</a></li>
				</ul>	
			</li>
		</ul>
	</li>
	<li>
		<a href="#">Work</a>
		<ul>
			<li>
				<a href="#">Work 1</a>
				<ul>
					<li>
						<a href="#">Work 11</a>		
						<ul>
							<li>
								<a href="#">Work 111</a>						
							</li>
							<li>
								<a href="#">Work 112</a>
							</li>
							<li>
								<a href="#">Work 113</a>
							</li>
						</ul>							
					</li>
					<li>
						<a href="#">Work 12</a>
						<ul>
							<li>
								<a href="#">Work 121</a>						
							</li>
							<li>
								<a href="#">Work 122</a>
							</li>
							<li>
								<a href="#">Work 123</a>
							</li>
						</ul>							
					</li>
					<li>
						<a href="#">Work 13</a>
						<ul>
							<li>
								<a href="#">Work 131</a>						
							</li>
							<li>
								<a href="#">Work 132</a>
							</li>
							<li>
								<a href="#">Work 133</a>
							</li>
						</ul>							
					</li>
				</ul>					
			</li>
			<li>
				<a href="#">Work 2</a>
				<ul>
					<li>
						<a href="#">Work 21</a>
						<ul>
							<li>
								<a href="#">Work 211</a>						
							</li>
							<li>
								<a href="#">Work 212</a>
							</li>
							<li>
								<a href="#">Work 213</a>
							</li>
						</ul>							
					</li>
					<li>
						<a href="#">Work 22</a>
						<ul>
							<li>
								<a href="#">Work 221</a>						
							</li>
							<li>
								<a href="#">Work 222</a>
							</li>
							<li>
								<a href="#">Work 223</a>
							</li>
						</ul>							
					</li>
					<li>
						<a href="#">Work 23</a>
						<ul>
							<li>
								<a href="#">Work 231</a>						
							</li>
							<li>
								<a href="#">Work 232</a>
							</li>
							<li>
								<a href="#">Work 233</a>
							</li>
						</ul>							
					</li>
				</ul>					
			</li>
			<li>
				<a href="#">Work 3</a>
				<ul>
					<li>
						<a href="#">Work 31</a>
						<ul>
							<li>
								<a href="#">Work 311</a>						
							</li>
							<li>
								<a href="#">Work 312</a>
							</li>
							<li>
								<a href="#">Work 313</a>
							</li>
						</ul>							
					</li>
					<li>
						<a href="#">Work 32</a>
						<ul>
							<li>
								<a href="#">Work 321</a>						
							</li>
							<li>
								<a href="#">Work 322</a>
							</li>
							<li>
								<a href="#">Work 323</a>
							</li>
						</ul>							
					</li>
					<li>
						<a href="#">Work 33</a>
						<ul>
							<li>
								<a href="#">Work 331</a>						
							</li>
							<li>
								<a href="#">Work 332</a>
							</li>
							<li>
								<a href="#">Work 333</a>
							</li>
						</ul>							
					</li>
				</ul>					
			</li>
		</ul>		
	</li>
	<li>
		<a href="#">About</a>	
	</li>
	<li>
		<a href="#">Contact</a>	
	</li>
</ul>

<br><br><br>
<p>Retour <a href="../">� l'article</a> / Suivre l'auteur sur <a href="http://twitter.com/catalinred">Twitter</a> !</p>

</body>
</html>