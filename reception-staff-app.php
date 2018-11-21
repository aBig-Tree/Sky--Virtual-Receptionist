<!DOCTYPE html>
<html>
<title>Welcome To The Buy To Let Broker</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {background-color: #033047; font-family: Arial, Helvetica, sans-serif; }
iframe {display: none;}
form {display: inline-block; width: 115px;}
.clocking-container {background: #000;}
.clocking-container h1 {font-size: 18pt; text-align: center; padding: 10px 0; margin: 0; color: #fff;}
.clocking-options {width: 100%; display: inline-block;}
input[type=submit] {height: 100%; color: #fff; font-size:17pt; white-space: normal; padding: 8px 5px; margin: 0; border: none;}
input.clocking-box.clocking-in[type=submit] {width: 100%; background: #93c447;}
input.clocking-box.clocking-out[type=submit] {width: 100%; background: #f12c2c;}
textarea, input.text, input[type="text"], input[type="button"], input[type="submit"], .input-checkbox {-webkit-appearance: none; border-radius: 0;}/* Get Off My Lawn!!! - tell iOS to behave */
.features-block {display: inline-block; width: 100%;}
.features-block-box {width: auto; min-width: 230px; padding: 20px 10px; float: left;}
@media screen and (max-width: 600px) {
    .features-block {display: block; max-width: 100%;}
    .features-block-box {display: inline-block; width: 100%; float: none; padding: 0;}   
    input[type=submit] {padding: 15px 0 15px 0;}
    #ConfirmationMessage {padding: 10px 0 10px 0; font-size: 20pt; background: #68a227;}
}
</style>
</head>
<body>
<!--
####################################################################
########################### Created by #############################
###....######..########.########.##.....##.########..........##..###
###...##....##....##....##.......##.....##.##................##..###
###...##..........##....##.......##.....##.##................##..###
###....######.....##....######...##.....##.######............##..###
###.........##....##....##........##...##..##..........##....##..###
###...##....##....##....##.........##.##...##..........##....##..###
###....######.....##....########....###....########.....######...###
####################################################################
####################################################################
-->
<!-- This page can be used as a clocking In/Out system for small businesses.  It pushes an event to google sheets. -->
<!-- When conversing with her, you'll find she only responds to 'Sky'.  Her favourite food is a Cheese Toasty. -->
<!-- DO NOT DELETE -->
<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
<?php  
date_default_timezone_set('Europe/London');
$ZapierURL = "YOUR_ZAPIER_URL_HERE?employee=";
$user1 = "Joe Blogs";
$user2 = "Someone Else";
$user3 = "Another Person";
?>
<!-- DO NOT DELETE -->

<div class="features-block">

	<div class="features-block-box in-out">
		<div class="clocking-container">
			<h1><?php echo $user1 ?></h1>
			<div class="clocking-options">
			<form action="<?php echo $ZapierURL ?><?php echo $user1 ?>&direction=IN&date=<?php echo date('d-m-Y')?>&time=<?php echo date('h:i:sa')?>" method="post" target="dummyframe">
		  		<input class="clocking-box clocking-in" type="submit" onclick="clickEventIN()" value="IN">
			</form> 
			<form action="<?php echo $ZapierURL ?><?php echo $user1 ?>&direction=OUT&date=<?php echo date('d-m-Y')?>&time=<?php echo date('h:i:sa')?>" method="post" target="dummyframe">
		  		<input class="clocking-box clocking-out" type="submit" onclick="clickEventOUT()" value="OUT">
			</form> 
			</div>
		</div>
	</div>

	<div class="features-block-box in-out">
		<div class="clocking-container">
			<h1><?php echo $user2 ?></h1>
			<div class="clocking-options">
			<form action="<?php echo $ZapierURL ?><?php echo $user2 ?>&direction=IN&date=<?php echo date('d-m-Y')?>&time=<?php echo date('h:i:sa')?>" method="post" target="dummyframe">
		  		<input class="clocking-box clocking-in" type="submit" onclick="clickEventIN()" value="IN">
			</form> 
			<form action="<?php echo $ZapierURL ?><?php echo $user2 ?>&direction=OUT&date=<?php echo date('d-m-Y')?>&time=<?php echo date('h:i:sa')?>" method="post" target="dummyframe">
		  		<input class="clocking-box clocking-out" type="submit" onclick="clickEventOUT()" value="OUT">
			</form> 
			</div>
		</div>
	</div>

	<div class="features-block-box in-out">
		<div class="clocking-container">
			<h1><?php echo $user3 ?></h1>
			<div class="clocking-options">
			<form action="<?php echo $ZapierURL ?><?php echo $user3 ?>&direction=IN&date=<?php echo date('d-m-Y')?>&time=<?php echo date('h:i:sa')?>" method="post" target="dummyframe">
		  		<input class="clocking-box clocking-in" type="submit" onclick="clickEventIN()" value="IN">
			</form> 
			<form action="<?php echo $ZapierURL ?><?php echo $user3 ?>&direction=OUT&date=<?php echo date('d-m-Y')?>&time=<?php echo date('h:i:sa')?>" method="post" target="dummyframe">
		  		<input class="clocking-box clocking-out" type="submit" onclick="clickEventOUT()" value="OUT">
			</form> 
			</div>
		</div>
	</div>

<!-- copy and paste one of the 'features-block-box in-out' DIVs above this line and update the user number accordingly -->

</div>


<!-- DO NOT DELETE -->
<div id="ConfirmationMessageIN" class="ConfirmationHide">Hello</div>
<div id="ConfirmationMessageOUT" class="ConfirmationHide">Goodbye</div>
<!-- DO NOT DELETE -->

<style>
.ConfirmationHide {opacity: 0;}
.ConfirmationShow {-o-transition: opacity 1s; -moz-transition: opacity 1s; -webkit-transition: opacity 1s; transition: opacity 1s; opacity:1;}
#ConfirmationMessageIN {background: #93c447; font-size: 30pt; color: #fff; display: block; position: fixed; bottom: 0; left: 0; width: 100%; z-index: 99; padding: 30px 0; text-align: center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);}
#ConfirmationMessageOUT {background: #f12c2c; font-size: 30pt; color: #fff; display: block; position: fixed; bottom: 0; left: 0; width: 100%; z-index: 99; padding: 30px 0; text-align: center; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);}
</style>

<script>
function clickEventIN() {
	ConfirmationPopupIN();

    var timer = setTimeout(function() {
        window.location='YOUR_WEB_ADDRESS/reception-app.html'
    }, 2000);
}

function ConfirmationPopupIN() {
      var ConfirmationMessageIN = document.getElementById("ConfirmationMessageIN");
      ConfirmationMessageIN.className="ConfirmationShow";
       setTimeout(function() {ConfirmationMessageIN.className="ConfirmationHide"; }, 5000);
}

// Evening
function clickEventOUT() {
	ConfirmationPopupOUT();

    var timer = setTimeout(function() {
        window.location='YOUR_WEB_ADDRESS/reception-app.html'
    }, 2000);
}

function ConfirmationPopupOUT() {
      var ConfirmationMessageOUT = document.getElementById("ConfirmationMessageOUT");
      ConfirmationMessageOUT.className="ConfirmationShow";
       setTimeout(function() {ConfirmationMessageOUT.className="ConfirmationHide"; }, 5000);
}
</script>



</body>
</html> 
