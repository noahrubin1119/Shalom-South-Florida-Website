<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.ico" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	echo '<img src="images/onair.png" alt="" title="" border="0" />';

elseif( ($d=="Sun") && ($h==10) && ($m>=0) && (m< 59) )
	echo '<img src="images/onair.png" alt="" title="" border="0" />';
else
	echo '<img src="images/offair.png" alt="" title="" border="0" />';


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
<li></li>
        </ul>
    </div>

  <div class="left_content">
    <div class="title">Recommended Links</div>
	<p><br />
      <a href="http://www.jewishheritageday.org/" target="_new"><img src="images/jhd.png" width="185" height="205" alt="jewish_heritage_day" /></a></p>
<p><a href="https://mostlymusic.com/" target="_new"><img src="images/mostly_music.png" width="250" height="64" alt="jukebox" /></a></p>
	      <p><a href="http://www.jewishpress.com/" target="_new"><img src="images/jewishpress.png" width="298" height="50" alt="jewishpress" /></a></p>
	<p><a href="http://www.jnf.org/" target="_new"></a></p>
  </div>

  <div class="right_content">

    <p>&nbsp;</p>
    <p><a href="http://www.israelnationalnews.com/" target="_new"><img src="images/arutz_sheva.png" width="295" height="56" alt="arutz_sheva" /></a></p>
<p><a href="http://wsbrradio.com/" target="_new"><img src="images/wsbr.png" width="310" height="96" alt="wsbr" /></a></p>
<p><a href="http://www.jnf.org/" target="_new"><img src="images/jnf-new.png" width="289" height="225" alt="jnf" /></a></p>
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
