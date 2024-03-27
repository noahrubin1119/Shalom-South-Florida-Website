<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="../images/favicon.ico" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  
	  <meta name="viewport" content="width=device-width,initial scale=1">

<title>Shalom South Florida - Ad</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
</head>

<body>
<div id="main_container">

	<div id="header">
    	<div id="logo"><img src="../images/new_logo.png" alt="" width="651" height="145" border="0" align="left" title="" /></div>
        <div class="on_air">
        
        
<?php
putenv("TZ=US/Eastern");
$d=date("D");
$h=date("G");
$m=date("i");


if( ($d=="Sun") && ($h==9) && ($m>29) )
	echo '<img src="../images/onair.png" alt="" title="" border="0"/>';
	
elseif( ($d=="Sun") && ($h==10) && ($m>=0) && (m< 59) )
	echo '<img src="../images/onair.png" alt="" title="" border="0"/>';
else
	echo '</br></br><br><img src="images/offair.png" width="150px" alt="offair" title="" border="0" />';


?>        
        
        
        
        
        </div>
    </div>
    <div id="menu">
        <ul>                                                                                                                      
            <li><a href="../index.php" title="">Home</a></li>
            <li><a href="../about.php" title="">About Us</a></li>
            <li><a href="../sponsors.php" title=""><u><strong>Our Sponsors</strong></u></a></li>
            <li><a href="../recommended.php" title="">Recommended Links</a></li>
			<li><a href="../coverage.php" title="">Coverage Map</a></li>
            <li><a href="../podcasts.php"><u><strong>Podcasts</strong></u></a></li>
			<li><a href="../contact.php" title="">Contact Us</a></li>
			<li><div class="dropdown" style="float:right;">
				<button class="dropbtn"><img src="../images/menu3.png" height="30px" style="transform: translateY(15%);"></img></button>
					<div class="dropdown-content">
					  <a href="../news.php" title="" style="z-index: 1; padding:0px 30px 0 30px;">In The News</a></br>
					  <a href="../reviews/" title="" style="z-index: 1; padding:0px 10px 0 30px;">Jewish Music Reviews</a></br>
					  <a href="../ad.php" title="" style="z-index: 1; padding:0px 10px 0 30px;">Printable Ad</a></br>
					</div>
			</div></li>

        </ul>
    </div>
  <div class="left_content">
    <div class="title">Printable Ad</div>
		
		</br></br>
		
		<div id="review">
		
			<h1>Click to Download</h1>
			
			<img src="../images/roni.jpg" width="75%"></img>
			
		</div>
	</div>
    
    <div class="right_content">
    	
        <a href="http://wwnnradio.com" target="_new"><img src="../images/listen_live.gif" alt="" title="" class="listen_live" border="0" /></a><!--Start of Calendar Event--><!--End of Calendar Event-->
    
		<div class="title">Ways to Listen to Shalom South Florida:</div>
      <p>Every Sunday from 9:30-11:00 AM Eastern Time, or listen to some of our recent podcasts on the <a href="../podcasts.php">podcasts page</a>.
	  
	  <ol>
		<li>In South Florida: WWNN 1470 AM</li>
		<li>N. Broward &amp; South Palm Beach – 95.3, 96.9, &amp; 103.9 FM (Check the <a href="../coverage.php">Coverage Map</a></li>
		<li>Worldwide: <a href="http://www.WWNNradio.com" target="_blank">www.WWNNradio.com</a></li>
		<li>Free Apps: iradionow; iheartradio, tuneinradio (Call Letters: WWNN)</li>
	</ol></p>
    
    
  <center><img src="../images/shalomlogo.png" alt="shalom_logo" width="150" height="222" /></center>
      <div id="menu2">
      <div class="title">Connect with Us!</div>
      
        <a href="https://www.facebook.com/pages/Shalom-South-Florida/325922271798" target="_new"><img src="../images/facebook.png" width="50" height="50" alt="facebook" /></a><a href="https://twitter.com/shalomsouthFL" target="_new"><img src="../images/twitter.png" width="50" height="50" alt="twitter"  /></a> <br />
      
    </div>
</div>
<div id="footer">
    	<div class="footer_links">                      
        <a href="index.php">home</a>
        <a href="http://WWNNradio.com" target="_new">listen live</a><a href="contact.php">contact us</a><a href="#"> </a>
        
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
