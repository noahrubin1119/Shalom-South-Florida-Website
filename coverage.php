<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.ico" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	  
	  <meta name="viewport" content="width=device-width,initial scale=1">

<title>Shalom South Florida - Coverage Map</title>
<link rel="stylesheet" type="text/css" href="style2.css" media="screen" />
<meta name="viewport" content="width=device-width">

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
	echo '<img src="images/onair.png" alt="" title="" border="0"/>';
	
elseif( ($d=="Sun") && ($h==10) && ($m>=0) && (m< 59) )
	echo '<img src="images/onair.png" alt="" title="" border="0"/>';
else
	echo '</br></br><br><img src="images/offair.png" width="150px" alt="offair" title="" border="0" />';


?>        
        
        
        
        
        </div>
    </div>
    
    </div>
  <style>

.topnav a.active {
  background-color: #7d0439;
  color: white;
}
.topnav .icon {
  display: none;
}

  @media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}</style>
  <!--<div id="menu">-->
  <div id="menu">
  <div class="centeredmenu">
    <ul>                                                                                                                      
            <li><a href="index.php" title="">Home</a></li>
            <li><a href="about.php" title="">About Us</a></li>
            <li><a href="sponsors.php" title=""><u><strong>Our Sponsors</strong></u></a></li>
            <li><a href="coverage.php" title="">Coverage Map</a></li>
            <li><div id="content-desktop"><a href="recommended.php" title="">Recommended Links</a></div></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
            <li><a href="podcasts.php"><u><strong>Podcasts</strong></u></a></li>
			<li><a href="https://www.gofundme.com/f/shalom-south-florida?member=&utm_medium=email&utm_source=customer&utm_campaign=p_email%2Binvitesupporters" target="_blank"><u><strong>Support Us</strong></a></u></li>
<li></li>
    </ul>
  </div>
  </div>
  <div id="main_container">
    
  <div class="left_content">
    <div class="title">Coverage Maps</div>
	
	<p>Click on a button to show the station's coverage map!</p>
	<button onclick="changePic(1470)" class="cov_button">1470 AM</button>
	<button onclick="changePic(953)" class="cov_button">95.3 FM</button></br>
	<button onclick="changePic(969)" class="cov_button">96.9 FM</button>
	<!--<button onclick="changePic(1039)"class="cov_button">103.9 FM</button>-->
	
	<script>
		function changePic(id){
			var mapView = document.getElementById("map");
			var mapId = document.getElementById("mapTitle");
			
			var dictOfMaps = {
				'1470': "WWNN 1470 AM",
				'953': "95.3 FM",
				'969': "96.9 FM",
				'1039': "103.9 FM"
			}
			
			console.log(id);
			mapView.src = "images/" + id + ".gif";
			mapId.innerHTML = dictOfMaps[id];
		}
	</script>
	
	<div class="title" id="mapTitle">WWNN 1470 AM</div>
	<p><img id="map" src="images/1470.gif" width="465" height="465" alt="coverage_map" /></p>
	
  </div>
    
    <div class="right_content">
    	
        <a href="http://wwnnradio.com" target="_new"><img src="images/listen_live.gif" alt="" title="" class="listen_live" border="0" /></a><!--Start of Calendar Event--><!--End of Calendar Event-->
    
		<div class="title">Ways to Listen to Shalom South Florida:</div>
      <p>Every Sunday from 9:30-11:00 AM Eastern Time, or listen to some of our recent podcasts on the <a href="../podcasts.php">podcasts page</a>.
	  
	  <ol>
		<li>In South Florida: WWNN 1470 AM</li>
		<li>N. Broward &amp; South Palm Beach – 95.3 &amp; 96.9 FM (Check the <a href="../coverage.php">Coverage Map</a>)</li>
		<li>Worldwide: <a href="http://www.WWNNradio.com" target="_blank">www.WWNNradio.com</a></li>
		<li>Free Apps: iradionow; iheartradio, tuneinradio (Call Letters: WWNN)</li>
	</ol></p>
    
    
  <center><img src="images/shalomlogo.png" alt="shalom_logo" width="150" height="222" /></center>
      <div id="menu2">
      <div class="title">Connect with Us!</div>
      
        <a href="https://www.facebook.com/pages/Shalom-South-Florida/325922271798" target="_new"><img src="images/facebook.png" width="50" height="50" alt="facebook" /></a><a href="https://twitter.com/shalomsouthFL" target="_new"><img src="images/twitter.png" width="50" height="50" alt="twitter"  /></a> <br />
      
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
