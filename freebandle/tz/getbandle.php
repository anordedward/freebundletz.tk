<?php session_start(); ?><!DOCTYPE html>
<html>
<head>
	<title>Get bundle</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/smart.jfif">
	<meta title="FREE BANDLE">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="get-body">
	<br><br>
<center><div class="main-script">
	<h4>Conguratulation</h4>
	<div class="false-div">
		Number <b><?php echo $_SESSION['number']?></b> of <b><?php echo $_SESSION['network'];?></b> Network receive 
		<?php 
			$network = $_SESSION['network'];
			if($network == "VODACOM"){
				echo "minutes:1000 all network,SMS: Unlimited and MB's:70 GB. Per Year";
			} else if($network == "TIGO"){
				echo"minutes:1200 all network,SMS: Unlimited and MB's:96 GB. Per Year";
			} elseif ($network == "AIRTEL") {
				echo "minutes:1000 all network,SMS: Unlimited and MB's:78 GB. Per Year";
			} else if($network == "HALOTEL"){
				echo "minutes:3000 all network,SMS: Unlimited and MB's:100 GB. Per Year";
			} else if($network == "TTCL"){
				echo "minutes:5000 all network,SMS: Unlimited and MB's:100 GB. Per Year";
			} else if($network == "ZANTEL"){
				echo "minutes:2000 all network,SMS: Unlimited and MB's:150 GB. Per Year";
			}

		?>
	</div>
	<div class="message">
		How to receive my bundle<br><br>

1.Click on the WhatsApp button below and share the message with your friends until the green bar below is filled.
<br><br>
2. After sharing the message with your friends and filling in the green bar, you will automatically be directed to an auto responder that will tell you how to receive your bundle You will receive an SMS confirmation within 12 hours</div>
<button id="btn"><a href="whatsapp://send?text=
	*Pata bando la mwaka mzima mitandao yote*
	*VODACOM*
	👇👇
	minutes:1000 all network,SMS: Unlimited and MB's:70 GB.
	*TIGO*
	👇👇
	minutes:1200 all network,SMS: Unlimited and MB's:96 GB.
	*AIRTEL*
	👇👇
	minutes:1000 all network,SMS: Unlimited and MB's:78 GB.
	*HALOTEL*
	👇👇
	minutes:3000 all network,SMS: Unlimited and MB's:100 GB.
	*TTCL*
	👇👇
	minutes:5000 all network,SMS: Unlimited and MB's:100 GB.
	*ZANTEL*
	👇👇
	minutes:2000 all network,SMS: Unlimited and MB's:150 GB.

	
	" data-action="share/whatsapp/share"><img class="share" src="image/share.png" ></a></button>

	<p>
		Your Share <span
		id="display">0</span> Times
	</p>

	<script type="text/javascript">
		var count = 0;
		var btn = document.getElementById("btn");
		var disp = document.getElementById("display");

		btn.onclick = function () {
			 count++;
			disp.innerHTML = count;

		}
	</script>
</div>
</center>

</body>
</ht