<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.ico" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <meta name="viewport" content="width=device-width,initial scale=1">

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
            <li><a href="index.php" title="">Home</a></li>
            <li><a href="about.php" title="">About Us</a></li>
            <li><a href="sponsors.php" title=""><u><strong>Our Sponsors</strong></u></a></li>
            <li><a href="coverage.php" title="">Coverage Map</a></li>
            <li><a href="recommended.php" title="">Recommended Links</a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
            <li><a href="archive.php"><u><strong>Podcasts</strong></u></a></li>
<li></li>
        </ul>
    </div>
    
  <div class="left_content">
    <div class="title">Contact Us</div>
	<p>
    Have a new album out? Send it to us for possible airplay.</p>
	<p>Attn: Roni<br />
	Shalom South Florida<br />
	c/o WSBR-AM<br />
	1650 South Dixie Highway<br />
    Fifth Floor<br />
    Boca Raton, FL 33432</p>
	<p>Free community event coming up? Get us a Press Release at least two weeks in advance:</p>
    <p>Attn: Roni<br />
Shalom South Florida<br />
c/o WSBR-AM<br />
1650 South Dixie Highway<br />
Fifth Floor<br />
Boca Raton, FL 33432</p>
    <div id="menu2">
      <div class="title">Connect with Us!</div>
      <center>
        <a href="https://www.facebook.com/pages/Shalom-South-Florida/325922271798" target="_new"><img src="images/facebook.png" width="50" height="50" alt="facebook" /></a><a href="http://twitter.com/#!/shalomsouthfl" target="_new"><img src="images/twitter.png" width="50" height="50" alt="twitter"  /></a>
        <br />
      </center>
    </div>
    <p>&nbsp;</p>
  </div>
    
    <div class="right_content">
    	
        <p><a href="http://wsbrradio.com" target="_new"><img src="images/listen_live.gif" alt="" title="" class="listen_live" border="0" /></a></p>
		<div class="title">Ways to Listen to Shalom South Florida:</div>
      Every Sunday from 9:30-11:00 AM Eastern Time, or listen to some of our recent podcasts on the <a href="../archive.php">podcasts page</a>.
	  
	  <ol>
		<li>In South Florida: WSBR 740 AM</li>
		<li>N. Broward &amp; South Palm Beach – 96.9 &amp; 103.9 FM</li>
		<li>Worldwide: <a href="http://www.WSBRradio.com" target="_blank">www.WSBRradio.com</a></li>
		<li>Free Apps: iradionow; iheartradio, tuneinradio (Call Letters: WSBR)</li>
	</ol>
	<p>Get your message to South Florida's large Jewish community:<br /> 
          Contact us at (561) 750-0888 or send us an e-mail to <a href="mailto:roni@shalomsouthflorida.com">roni@shalomsouthflorida.com</a>.</p>
      <p>Want to hear a song? Make a request or dedication.  Give us your comments and suggestions:<br />
        Call our office at (561) 750-0888, or send  an e-mail to <a href="mailto:roni@shalomsouthflorida.com">roni@shalomsouthflorida.com</a>.</p>
        <p><center><img src="images/shalomlogo.png" alt="shalom_logo" width="150" height="222" /></center>&nbsp;</p>
        
        <!--Start of Calendar Event--><!--End of Calendar Event-->
    
    
    
  </div>
    


<div id="footer">
    	<div class="footer_links">                      
        <a href="index.php">home</a>
        <a href="http://wsbrradio.com" target="_new">listen live</a><a href="contact.php">contact us</a><a href="http://validator.w3.org/check?uri=referer"><img
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
