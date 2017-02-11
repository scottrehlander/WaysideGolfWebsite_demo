<?php 
	session_start(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<title>Wayside Golf Center</title>
    
    
		<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
        <script type="text/javascript" src="gallery.js"></script>
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="english" />
	<meta name="description" content="Wayside Golf Center" />
	<link href="1.css" rel="stylesheet" type="text/css" />

</head>
<body> 
    <div id="transDiv">
    	<a href="#">Home</a>
      	<a href="#">About Us</a>
      	<a href="#">Directions</a>
    </div>
<div id="waysideName">
    	<img src="waysideName.gif" />
    </div>

<div id="galleryContainer">

    <div id="slideshow">
        <img src="rangeImages/1.JPG" alt="Slideshow Image 1" class="active" />
        
        <?php
		
			for($i = 2; $i <= 15; $i++)
				echo("<img src=\"rangeImages/" . ($i) . ".JPG\" alt=\"Slideshow Image " . ($i) . "\" />");
		?>
        
	</div>
</div>

<div id="content">
	<div id="contentHeader">
    	 
        <div>Welcome to Wayside Golf Center</div>
    </div>
    
    <div id="contentBody">
  		<p>Wayside Golf Center is now open and ready for business!  Come check out our completely renovated facility and bring the whole family.  We have 3 greens, 3 practise targets for chipping, and great prices!!</p>
        <p>We are open 7 days a week from 9:00am to 7:00pm, so come by and take a few swings.  We are convieninently located on route 20 in Marlborough, MA, right next to Makkas Pizza.</p>
        <p>Be sure to take advantage of our new promotion.  Buy 12 buckets of any size, and get an extra large bucket of balls absolutely free.  The fun never stops at Wayside Golf Center!</p>

<center>        
	<br />
    We are located at 890 Boston Post Rd E, Marlborough, MA
        <img src="http://maps.google.com/maps/api/staticmap?center=42.350622,-71.491692&zoom=13&markers=42.345927,-71.552287|42.345927,-71.552287|42.350622,-71.491692&size=500x300&sensor=true"/>
</center>
        
        <br /><br />
        <div id="contentFooter">
    Copyright ©2010 <a href="http://rehlander.com">Rehlander Technologies</a> • All Rights Reserved
        </div>
    </div>

</div>

<br />
 
  
</body>
</html>













