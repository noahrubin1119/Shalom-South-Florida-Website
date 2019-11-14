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
            <li><a href="index.php" title="">Home</a></li>
            <li><a href="about.php" title="">About Us</a></li>
            <li><a href="sponsors.php" title="">Our Sponsors </a></li>
            <li><a href="coverage.php" title="">Coverage Map</a></li>
            <li><a href="recommended.php" title="">Recommended Links</a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
            <li><a href="archive.php">Archived Shows</a></li>
    </ul>
  </div>
  
  <div align="center">
  <div class="title"></br>Recommended Links</div>
    <table width="502" height="40" cellpadding="5" border="0px">
	
	<style>
				table td, tr{
				border: 0px;
				}
				
				table {border: none;}
	</style>

		<td>
			<a href="http://www.jewishheritageday.org/" target="_new"><img src="images/jhd.png" width="75" height="75" alt="jewish_heritage_day" /></a>
		</td>
		
		<td valign="center">
			<a href="http://www.jewishheritageday.org/" target="_new"><img src="images/button_jewish-heritage-day2.png" width="250" height="38" alt="jewish_heritage_day" /></a>
		</td>
		<td></td>
		<td align="center">
			<a href="http://www.israelnationalnews.com/" target="_new"><img src="images/arutz_sheva.png" width="50" height="50" alt="jewish_heritage_day" /></a>
		</td>
		<td valign="center">
			<a href="http://www.israelnationalnews.com/" target="_new"><img src="images/button_arutz-sheva.png"  width="250" height="38" alt="jewish_heritage_day" /></a>
		</td>
		
		<tr>
		
		<td>
			<a href="https://mostlymusic.com/" target="_new"><img src="images/mostly_music.png" width="75" height="75" alt="jukebox" /></a></a>
		</td>
		<td valign="center">
			<a href="https://mostlymusic.com/" target="_new"><img src="images/button_mostly-music.png" width="250" height="38" alt="jukebox" /></a></a>
		</td>
		<td></td>
		<td>
			<a href="http://wsbrradio.com/" target="_new"><img src="images/wsbr.png" width="75" height="75" alt="jukebox" /></a></a>
		</td>
		<td valign="center">
			<a href="http://wsbrradio.com/" target="_new"><img src="images/button_wsbr-am.png" width="250" height="38" alt="jukebox" /></a></a>
		</td>
		<tr>
		
		<td>
			<a href="http://www.jewishpress.com/" target="_new"><img src="images/jewishpress.png" width="75" height="75" alt="jewish_heritage_day" /></a>
		</td>
		<td valign="center">
			<a href="http://www.jewishpress.com/" target="_new"><img src="images/button_the-jewish-press.png" width="250" height="38" alt="jewish_heritage_day" /></a>
		</td>
		<td></td>
		<td>
			<a href="http://www.jnf.org/" target="_new"><img src="images/jnf-new.png" width="75" height="75" alt="jewish_heritage_day" /></a>
		</td>
		<td valign="center">
			<a href="http://www.jnf.org/" target="_new"><img src="images/button_jewish-national-fund.png" width="250" height="38" alt="jewish_heritage_day" /></a>
		</td>
		<tr>
		
		<td>
			<a href="http://www.nigunmusic.com/" taget="_new"><img src="images/nigun.png" width="75" height="75" alt="jewish_heritage_day" /></a>
		</td>
		<td valign="center">
			<a href="http://www.nigunmusic.com/" taget="_new"><img src="images/button_nigun-music.png" width="250" height="38" alt="jewish_heritage_day" /></a>
		</td>
		<!--
		<td> <center> <p><a href="http://www.jewishheritageday.org/" target="_new"><img src="images/jhd.png" width="150" height="150" alt="jewish_heritage_day" /></a></p> </center> </td>
<td> <center> <p><a href="https://mostlymusic.com/" target="_new"><img src="images/mostly_music.png" width="200" height="50" alt="jukebox" /></a></p> </center> </td>
<td> <center> <p><a href="http://www.jewishpress.com/" target="_new"><img src="images/jewishpress.png" width="200" height="50" alt="jewishpress" /></a></p> </center> </td>
		   </tr>

<td> <center> <p><a href="http://www.israelnationalnews.com/" target="_new"><img src="images/arutz_sheva.png" width="200" height="50" alt="arutz_sheva" /></a></p> </center> </td>
<td> <center> <p><a href="http://wsbrradio.com/" target="_new"><img src="images/wsbr.png" width="250" height="100" alt="wsbr" /></a></p> </center> </td>
<td> <center> <p><a href="http://www.jnf.org/" target="_new"><img src="images/jnf-new.png" width="200" height="150" alt="jnf" /></a></p> </center> </td>
			</tr>
<td></td>
<td> <center> <p> <a href="http://www.nigunmusic.com/" taget="_new"><img src="images/nigun.png" width = "250" alt="nigun music" /></a></p></center></td>
<td></td> -->
			 		 	 	 	 	 	 	                 
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
