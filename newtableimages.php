<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shalom South Florida</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<div id="main_container">

	<div id="header">
    	<div id="logo"><img src="images/new_logo.png" alt="" width="651" height="145" border="0" align="left" title="" /></div>
        <div class="on_air">
        
        
<?php
putenv("TZ=US/Eastern");
$d=date("D");
$h=date("G");
$m=date("i");


if( ($d=="Sun") && ($h==9) && ($m>29) )
	echo '<img src="images/onair.png" alt="onair" title="" border="0" />';
	
elseif( ($d=="Sun") && ($h==10) && ($m<30) )
	echo '<img src="images/onair.png" alt="onair" title="" border="0" />';
else
	echo '<img src="images/offair.png" alt="offair" title="" border="0" />';


?>        
        
        
        

        </div>
    </div>
    
	
	
  <div id="menu">
    <ul>                                                                                                                      
            <li><a href="index.php" title="">home</a></li>
            <li><a href="about.php" title="">about us</a></li>
            <li><a href="sponsors.php" title="">our sponsors </a></li>
            <li><a href="coverage.php" title="">coverage map</a></li>
            <li><a href="recommended.php" title="">recommended links</a></li>
            <li><a href="contact.php" title="">contact us</a></li>
            <li><a href="archive.php">archived shows</a></li>
    </ul>
  </div>
  
  <div align="center">
  <div class="title"></br>We Thank Our Sponsors</div>
    <table width="502" height="40" cellpadding="10">
				 
<td> <center> <p><a href="http://www.alleprocessing.com/store/pc/home.asp" target="_new"><img src="images/mealmart.png" width="200" height="50" alt="mealmart" /></a></p> </center> </td>
<td> <center> <p><a href="http://www.winndixie.com/" target="_new"><img src="images/winn.png" alt="winn_dixie"  width="200" height="50" /></a></p> </center> </td>
<td> <center> <p><a href="http://elal.com" target="_new"><img src="images/elal.png" width="200" height="50" alt="elal" /></a></p> </center> </td>
		   </tr>

<td> <center> <p><a href="http://browardcenter.org/" target="_new"><img src="images/browardctr.png" width="200" height="75" alt="browardctr" /></a></p> </center> </td>
<td> <center> <p><a href="http://www.nbn.org.il" target="_new"><img src="images/nbn.png" width="200" height="75" alt="nbn" /></a></p> </center> </td>
<td> <center> <p><a href="https://www.stagedoorfl.org/" target="new"><img src="images/stagedoor.png" width="200" height="75" alt=""/></a></p> </center> </td>
			</tr>

<td> <center> <p><a href="http://marlins.com" target="_new"><img src="images/marlins.png" width="200" height="75" alt="marlins" /></a></p> </center> </td>
<td> <center> <p><a href="http://www.jnf.org/" target="new"><img src="images/jnf-new.png" width="200" height="100" alt="jnf"/></a></p> </center> </td>
<td> <center> <p><a href="http://www.crayola.com/" target="_new"><img src="images/crayola.png" width="175" height="100" alt="crayola" align = "center" /></a></p> </center> </td>
			</tr>
	
<th colspan = "3"> <div align = "center"> <table> <td style="padding:0 10px 0 0px;> <center> <p><a href="http://www.kravis.org/" target="_new"><img src="images/kravis.gif" width="125" height="175" alt="kravis" /></a></p> </center> </td> 
<td> <center> <p><a href="http://www.walltowallnuts.com/" target="_new"><img src="images/wall.png" width="150" height="150" alt="wall" /></a></p> </center> </td> </table> </div> </th>
			</tr>
			 		 	 	 	 	 	 	                 
			 		 	 	 	 	 	 	                   </table>
				 		 
<p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="photo_gallery">
   	  <div class="left_nav"></div>
        <div class="gallery_thumbs"></div>
        <div class="right_nav"><span class="footer_links"><a href="http://validator.w3.org/check?uri=referer"></a></span></div> 
    </div>
     
    
</div>
    


     <div id="footer">
    	<div class="footer_links">                      
        <a href="index.php">home</a>
        <a href="http://wsbrradio.com/streamer/" target="_new">listen live</a><a href="contact.php">contact us</a><a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="61" height="18" /></a><a href="#"> </a>
        
    <p>&nbsp;</p></div>
        
     	<div class="copyright">&copy;<?php $y=date(Y); echo "$y"; ?> Shalom South Florida, Inc.</div>
</div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27939700-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
