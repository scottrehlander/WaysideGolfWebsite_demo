<?php 
	session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>Wayside Golf Center</title>
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="english" />
	<meta name="description" content="Wayside Golf Center" />
  	<link href="layout/style.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="javascripts/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="javascripts/gallery.js"></script>

<style type="text/css">
<!--
#page #content #contentRight {
	font-weight: bold;
}
-->
</style>
</head>
<body style="background-image:url(365_tile_Grass2.jpg); background-repeat:repeat;"> 
    
	<div id="page">
    
	  <div id="header">
      
      	<div id="headerTop">
        </div>
        
        <div id="headerMidLeft">
        </div>
        
        <div id="headerMidMid">
            <div id="slideshow">
                <img src="rangeImages/15.JPG" alt="Slideshow Image 1" class="active" />
                
                <?php
                
                    for($i = 2; $i <= 14; $i++)
                        echo("<img src=\"rangeImages/" . $i . ".JPG\" alt=\"Slideshow Image " . $i . "\" />");
                ?>
            </div>
            <h1>Wayside Golf Center Hours</h1>
            <p>Weekdays: 9:00am-6:00pm<br/>Weekends: 9:00am-6:00pm</p>
        </div>
        
        <div id="headerMidRight">
        </div>
        
        <div id="headerBot">
        </div>
        
      </div>
        
        <div id="content">
        	<p id="contentLeft">Wayside Golf Center is now open and ready for business!  Come check out our completely renovated facility and bring the whole family.  We have 3 greens, 3 practise targets for chipping, and great prices!!  Come by and take a few swings.  We are convieninently located on route 20 in Marlborough, MA, right next to Makkas Pizza.<br/><br/><br/>
            <b>Be sure to take advantage of our newest promotion:</b><br/><br/>
            Buy 12 buckets of any size, and get an extra large bucket of balls absolutely free.  The fun never stops at Wayside Golf Center!</p>
          	<p id="contentRight" style="text-align:center">
            	Wayside Golf Center
                <br />
                890 Boston Post Rd E, Marlborough, MA
              <br /><br />
		        <img width="350" height="250" src="http://maps.google.com/maps/api/staticmap?center=42.350622,-71.491692&amp;zoom=13&amp;markers=42.345927,-71.552287|42.345927,-71.552287|42.350622,-71.491692&amp;size=350x250&amp;sensor=true"/>
            </p>
      </div>
        
        <div id="footer">
        	<p><br />Copyright ©2010 <a href="http://rehlander.com">Rehlander Technologies</a> • All Rights Reserved</p>
        </div>
</div>
    
</body>
</html>













