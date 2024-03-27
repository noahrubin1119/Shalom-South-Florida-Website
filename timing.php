<?php
putenv("TZ=US/Eastern");
$d=date("D");
$h=date("G");
$m=date("i");

echo "$d $h $m";


if( ($d=="Sun") && ($h==9) && ($m>29) )
	echo '<img src="images/onair.gif" alt="" title="" border="0" />';
	
elseif( ($d=="Sun") && ($h==10) && ($m>=0) && (m< 30) )
	echo '<img src="images/onair.gif" alt="" title="" border="0" />';
else
	echo '<img src="images/offair.gif" alt="" title="" border="0" />';


?>