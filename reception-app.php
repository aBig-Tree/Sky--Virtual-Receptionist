<!DOCTYPE html>
<html>
<title>Welcome To Sky, Your Virtual Receptionist</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<script type="text/javascript">
// this will be used to refresh the page automatically overnight.  Some fullscreen browsers suck on tablets when it comes to refreshing pages.  This helps a lot.
function getCurrentTime()
{
	var myDate = new Date();
	var mySecs = myDate.getSeconds();
	var curHour = myDate.getHours();
	var curMin = myDate.getMinutes();
	var suffix = "AM";

	if(mySecs < 10)
		mySecs = "0" + mySecs;

	if(curMin < 10)
		curMin = "0" + curMin;

	if(curHour == 12 && curMin >= 1)
	{
		suffix = "PM";
	}
	if(curHour == 24 && curMin >= 1)
	{
		curHour-= 12;
		suffix = "AM";
	}
	if(curHour > 12)
	{
		curHour-= 12;
		suffix = "PM";
	}

	var time = curHour + ":" + curMin + ":" + mySecs + " " + suffix;
	document.getElementById('time').innerHTML=(time);

		if(time == "06:00:00 AM") //Change this to whatever time you want
			location.reload(true);
}
</script>
<style>
body {background-color: #033047; font-family: Arial, Helvetica, sans-serif; }
div.logo {text-align: center; display: block;}
iframe {display: none;}
input[type=submit] {width: 100%; height: 100%; color: #fff; font-size:20pt; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); white-space: normal; padding: 13px 5px 13px 5px; margin: 2px 0; border: none;}
input.visit {background-color: #93c447;}
input.delivery {background-color: #009acd;}
textarea,
input.text,
input[type="text"],
input[type="button"],
input[type="submit"],
.input-checkbox {-webkit-appearance: none; border-radius: 0;}/* Get Off My Lawn!!! - tell iOS to behave */
.features-block {display: inline-block; width: 100%;}
.features-block-box {width: auto; min-width: 230px; padding: 10px; cursor: pointer; float: left;}
h1.category.visitor {font-size: 26pt; color: #fff; padding: 0 10px;	margin-bottom: 0;}
.ConfirmationHide {opacity: 0;}
.ConfirmationShow {-o-transition: opacity 1s; -moz-transition: opacity 1s; -webkit-transition: opacity 1s; transition: opacity 1s; opacity:1;}
#ConfirmationMessage {background: #93c447; font-size: 30pt; color: #fff; display: block; position: fixed; bottom: 0; left: 0; width: 100%; z-index: 99; padding: 30px 0; text-align: center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);}
.time {bottom: 0; right: 0; float: right; position: absolute; padding: 20px; color: #fff;}

.staff-screens {top: 0; right: 0; display: block; position: absolute;}
.staff-screens a {width: 300px; color: transparent; padding: 50px; border: none;}

@media screen and (max-width: 600px) {
    .features-block {display: block; max-width: 100%;}
    .features-block-box {display: inline-block; width: 100%; float: none; padding: 0;}   
    input[type=submit] {padding: 15px 0 15px 0;}
    div.logo {transform: scale(0.9);}
    #ConfirmationMessage {padding: 10px 0 10px 0; font-size: 20pt; background: #68a227;}
    h1.category.visitor {font-size: 20pt; text-align: center;}
}
</style>
</head>

<body>
<!--
Created by: Steve Johnson @aBiG_Tree
Version: 1.1
Date: 21 November 2018
Summary: Quick and dirty way of having a professional looking virtual receptionist.  Intended for small companies, otherwise the notifications would be just stupid.

Requirements:
- Tablet (anything will work, but an older high-end is waaayyy better than a new cheap tablet)
- Tablet Stand (e.g. https://www.amazon.co.uk/s/field-keywords=secure+tablet+floor+stand)
- Zapier account
- Charging cable/plug (remember it needs to go down the back of the stand and up the wall.  I went for a 4m cable.)
- Full screen browser app (there's quite a few)
- Somewhere private to locate your file (e.g. FTP access)

Instructions
1. Go to Zapier and create a new zapp.  For the Trigger, select 'Webhooks' and select 'Catch Hook'
3. Enter the URL it gives you into each button below and append a persons name (or whatever) onto the URL.  See examples below.
4. Back in Zapier, select Pushbullet as the Action and select 'Send a Note'
5. For the template, use something decent for the title (I went with 'There's somebody at the door ha ha') and in the body add your catch hook.  
6. Install the desktop or chrome extension of Pushbullet, or whatever it is you're using and submit a test.
7. Once the below is done, upload your file somewhere accessible on the web.  I uploaded it to one of my sites via FTP and blocked it from the outside world using htaccess, so it can only be accessed via our IP address.
8. On your tablet, download a fullscreen browser and browse to your file (do a test on something off the network to check the block worked).
9. If your're on iOS, go into the accessibility settings and turn on 'Guided Access' to prevent people leaving the browser.  It'll walk you through it.
10. That's it!  You can now push out updates by updating the file via FTP and the tablet will pull them through overnight.

OPTIONAL:  Use the reception-staff-app.php file to enable staff to sign in and out of a building.  We use it for fire safety.

Notes
This probably isn't that tidy and I expect others could improve it - go for it!  I initially started it because as a small business, we don't have a receptionist.  So visitors and people delivering parcels would just wander in and as i was nearest the door, they'd come to me (I don't people all that well!!).  I then started to look into various solutions, but I was amazed at the amount of crap out there.  We already had an old tablet knocking around, so this only cost us about £60 all in.  Anyway, I started tinkering and ended up with this after a few iterations.  Hopefully it'll help a few people out.

I installed Pushbullet initially and later Slack on peoples machines to receive messages, but I expect you could probably hook it up to pretty much any messaging service. 

If you paid for the premium version of Zapier, you could set it up to notify a group of people or specific departments.  Otherwise i can see this getting a bit out of hand for larger companies (there's about 15 of us).

Feel free to use this, but it would be nice if you credited me.  Cheers!

-->


<!-- DO NOT DELETE -->
	<!-- The buttons trick the browser into looking at this invisible iframe at the top of the page to prevent the page from refreshing. -->
		<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
	<!-- This section forces the browser to refresh the page at midnight every night using the javascript in the header. -->
		<body onload="setInterval('getCurrentTime()', 1000);">
		<div id="time" style="display:none;"></div>
<?php  
$ZapierURL = "https://hooks.zapier.com/hooks/catch/[YOUR-ZAPIER-CATCH-HOOK]/";
?>
<!-- DO NOT DELETE -->

<div class="logo"><img width="250px" src="[YOUR LOGO]"></div> <!-- Use an SVG logo to make it look loooveeelllyy-->

<!-- This section can be deleted if you aren't implementing the IN/OUT system.  It places a hidden div at the top right of the page, which your users can tap to access the In/Out screen. -->
<div class="staff-screens">
	<a href="[YOUR-URL]/reception-staff-app.php">Staff Log In</a>
</div>
			
<h1 style="margin-top: 5px;" class="category visitor">I'm here to see...</h1>

<div class="features-block">
<!-- Copy and paste as many of these as you need.  Be sure to change the value, catch hook and the persons name that we append to the catch hook -->
	<div class="features-block-box">
		<form action="<?php echo $ZapierURL ?>?visitor=They're+here+to+see+Bob+Green" method="post" target="dummyframe">
	  		<input class="visit" type="submit" onclick="ConfirmationPopup()" value="Bob Green">
		</form> 
	</div>

	<div class="features-block-box">
		<form action="<?php echo $ZapierURL ?>?visitor=They're+here+to+see+June+Red" method="post" target="dummyframe">
	  		<input class="visit" type="submit" onclick="ConfirmationPopup()" value="June Red">
		</form> 
	</div>

	<div class="features-block-box">
		<form action="<?php echo $ZapierURL ?>?visitor=They're+here+to+see+Steve+Orange" method="post" target="dummyframe">
	  		<input class="visit" type="submit" onclick="ConfirmationPopup()" value="Steve Orange">
		</form> 
	</div>

	<div class="features-block-box">
		<form action="<?php echo $ZapierURL ?>?visitor=They're+here+to+see+Wilma+Purple" method="post" target="dummyframe">
	  		<input class="visit" type="submit" onclick="ConfirmationPopup()" value="Wilma Purple">
		</form> 
	</div>
</div>



<h1 class="category visitor">I want to...</h1>



<div class="features-block">

	<div class="features-block-box">
	<form action="<?php echo $ZapierURL ?>?visitor=They+are+here+to+deliver+a+parcel" method="post" target="dummyframe">
	  <input class="delivery" type="submit" onclick="ConfirmationPopup()" value="Deliver a Parcel">
	</form> 
	</div>

	<div class="features-block-box">
	<form action="<?php echo $ZapierURL ?>?visitor=They+are+here+with+FOOOOOD" method="post" target="dummyframe">
	  <input class="delivery" type="submit" onclick="ConfirmationPopup()" value="Deliver Food">
	</form> 
	</div>
	
</div>





<!-- Do Not Delete.  Controls the pop up confirmation -->
<div id="ConfirmationMessage" class="ConfirmationHide">Good to see you.  We'll be out in a minute...</div>

<script>
function ConfirmationPopup()
    {
      var ConfirmationMessage = document.getElementById("ConfirmationMessage");
      ConfirmationMessage.className="ConfirmationShow";
       setTimeout(function() {ConfirmationMessage.className="ConfirmationHide"; }, 5000);
       
    }
</script>
<!-- Do Not Delete.  Controls the pop up confirmation -->


</body>
</html> 