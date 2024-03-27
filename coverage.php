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
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '220786502961938');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=220786502961938&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Ads: 1006472116 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1006472116"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1006472116');
</script>
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
			<li><div id="content-mobile"><div class="dropdown" style="float:left;">
				<button class="dropbtn"><img src="images/menu3.png" height="30px" style="transform: translateY(15%);"></img></button>
					<div class="dropdown-content">
					  <a href="index.php" title="">Home</a><br>
						<a href="about.php" title="">About Us</a><br>
						<a href="sponsors.php" title=""><u><strong>Our Sponsors</strong></u></a><br>
						<a href="coverage.php" title="">Coverage Map</a><br>
						<a href="images/SSF_FLYER.pdf" title="">Printable Flyer</a><br>
						<a href="contact.php" title="">Contact Us</a><br>
						<a href="podcasts.php"><u><strong>Podcasts</strong></u></a><br>
						<a href="https://www.gofundme.com/f/shalom-south-florida?member=&utm_medium=email&utm_source=customer&utm_campaign=p_email%2Binvitesupporters" target="_blank"><u><strong>Support Us</strong></u></a><br>
					  <!--<a href="news.php" title="" style="z-index: 1; padding:0px 30px 0 30px;">In The News</a></br>
					  <a href="reviews.php" title="" style="z-index: 1; padding:0px 10px 0 30px;">Jewish Music Reviews</a></br>
					  <a href="ad.php" title="" style="z-index: 1; padding:0px 10px 0 30px;">Printable Ad<a></br>-->
					</div>
			</div></div><div id="content-desktop"></div></li>
			<div id="content-desktop">
            <li><a href="index.php" title="">Home</a></li>
            <li><a href="about.php" title="">About Us</a></li>
            <li><a href="sponsors.php" title=""><u><strong>Our Sponsors</strong></u></a></li>
            <li><a href="coverage.php" title="">Coverage Map</a></li>
            <li><a href="images/SSF_FLYER.pdf" title="">Printable Flyer</a></li>
            <li><a href="contact.php" title="">Contact Us</a></li>
            <li><a href="podcasts.php"><u><strong>Podcasts</strong></u></a></li>
			<li><a href="https://www.gofundme.com/f/shalom-south-florida?member=&utm_medium=email&utm_source=customer&utm_campaign=p_email%2Binvitesupporters" target="_blank"><u><strong>Support Us</strong></u></a></li>
			</div>
	</ul>
</div>		
  </div>
  <div id="main_container">
    \=l
 <divclass="left_content">
    <CENTER> <div class="title">Coverage Map</div>
	
	<!-- <p>Click on a button to show the station's coverage map!</p>
	<button onclick="changePic(1470)" class="cov_button">1470 AM</button>
	<button onclick="changePic(953)" class="cov_button">95.3 FM</button></br>
	<button onclick="changePic(969)" class="cov_button">96.9 FM</button> -->
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
	<!--
	<div class="title" id="mapTitle">WWNN 1470 AM</div>
	<p><img id="map" src="images/1470.gif" width="465" height="465" alt="coverage_map" /></p>
	-->
	<p>Dial Position: 95.3fm, 96.9fm, 95.9fm, 106.9fm, 103.1F3, 104.3F3 
Coverage Area: Miami- Dade, Broward, Palm Beach, Martin and Port St. Lucie Counties</p>
	<img src="images/coverage1.jpg" width="400" height="400" alt="coverage map"></img>
		<img src="images/coverage2.png" width="400" height="400" alt="coverage map"></img>

  </div>
    
    <div class="right_content"> 
    	
        <a href="https://player.listenlive.co/63891" target="_new"><img src="images/listen_live.gif" alt="" title="" class="listen_live" border="0" /></a><!--Start of Calendar Event--><!--End of Calendar Event-->
   
		<div class="title">Ways to Listen to Shalom South Florida:</div>
      <p>Sundays from 9:30-11:00 AM (ET):.
	<p><u>In South Florida:</u> </p>
	  <ul>
		<li>In the Palm Beaches: 95.9FM &amp; 106.9FM</li>
		<li>South Palm Beach:  95.3FM</li>
		<li>In N. Broward: 96.9FM</li>
		<li>Miami-Dade WSFS 104.3HD3</li>
	</ul>
	<p><u>Worldwide:</u></p>
	  <ul>
	<li><a href="https://player.listenlive.co/63891" target="_blank">www.oldiessouthflorida.com</a></li>
	<li>Listen to some of our recent shows on the <a href="../podcasts.php">podcasts page</a></li>
	<li>On most radio apps</li>
	</ul>
	</p>

    
  <center><img src="images/shalomlogo.png" alt="shalom_logo" width="150" height="222" /></center>
      <div id="menu2">
      <div class="title">Connect with Us!</div>
      
        <a href="https://www.facebook.com/pages/Shalom-South-Florida/325922271798" target="_new"><img src="images/facebook.png" width="50" height="50" alt="facebook" /></a><a href="https://twitter.com/shalomsouthFL" target="_new"><img src="images/twitter.png" width="50" height="50" alt="twitter"  /></a> <br />
      
    </div>
	
	</CENTER>
</div>
<div id="content-mobile">
<CENTER>
<a href="https://player.listenlive.co/63891" target="_new"><img src="images/listen_live.gif" alt="" title="" class="listen_live" border="0" width="40%" /></a>
</CENTER>
</div>
<div id="footer">
    	<div class="footer_links">                      
        <a href="index.php">home</a>
        <a href="https://player.listenlive.co/63891" target="_new">listen live</a><a href="contact.php">contact us</a><a href="#"> </a>
        
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
