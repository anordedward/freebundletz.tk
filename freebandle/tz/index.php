<!DOCTYPE html>
<html>
<head>
	<title>FREE BANDLE</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="image/smart.jfif">
	<meta title="FREE BANDLE">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
	<div class="container">
		<div class="main-div">
			<h1>OFFER FREE BUNDLE UP TO <?php echo date("d/");?>7/2022</h1>
			<p>details</p>
			<div class="div-images">
				<div class="img"><img src="image/vodacom.png"><hr><br><b>VODACOM</b><br>minutes:1000 all network<br>SMS: Unlimited<br>MB's:70 GB <br>Per Year</div>&nbsp;&nbsp;
				<div class="img"><img src="image/tigo.png"><hr><br><b>TIGO</b><br>minutes:1200 all network<br>SMS: Unlimited<br>MB's:96 GB<br>Per Year</div>&nbsp;&nbsp;
				<div class="img"><img src="image/airtel.jfif"><hr><br><b>AIRTEL</b><br>minutes:1000 all network<br>SMS: Unlimited<br>MB's:78 GB<br>Per Year</div>&nbsp;&nbsp;
				<div class="img"><img src="image/halotel.jfif"><hr><br><b>HALOTEL</b><br>minutes:3000 all network<br>SMS: Unlimited<br>MB's:100 GB<br>Per Year</div>&nbsp;&nbsp;
				<div class="img"><img src="image/ttcl.png"><hr><br><b>TTCL</b><br>minutes:5000 all network<br>SMS: Unlimited<br>MB's:100 GB<br>Per Year</div>&nbsp;&nbsp;
				<div class="img"><img src="image/zantel.jfif"><hr><br><b>ZANTEL</b><br>minutes:2000 all network<br>SMS: Unlimited<br>MB's:150 GB<br>Per Year</div>&nbsp;&nbsp;
			</div>
		</div>
	</div>
</div>
<br>
<div class="form">
	<div class="div-form">
		<div class="main-form-div">
			<div><h2>register your number</h2></div>
			<div for="form">
				<form method="POST">
					<select name="network" required>
						<option value="">Select Your Network</option>
						<option>VODACOM</option>
						<option>TIGO</option>
						<option>AIRTEL</option>
						<option>HALOTEL</option>
						<option>TTCL</option>
						<option>ZANTEL</option>
					</select>
					<!--php here-->
					<?php include_once'function.php';?>
					<input type="number" name="number" placeholder="Enter your Phonenumber" required><br><br>
					<center><p class="error"><?php if(isset($_POST['submit'])){ echo $error; echo "<br>"; }?></p></center>
					<center><input type="submit" name="submit" value="Get Offer"></center>
				</form>
			</div>
		</div>
	</div>
</div>
<br><br>
<div class="footer">
	<div class="footer-div">
		<p1>Welcome to this offer which gives you many minutes, sms and mb free to enjoy and communicate with relatives and friends in Tanzania for all networks fill out the form above to receive this offer that you will use throughout the year,</p1>

		<p2>Getatoz is a platform to help manufacturers, suppliers, exporters & local small and medium - sized businesses (SMBs) in implementing digital solutions to transform their businesses. With millions of users visting our platform every month, we look forward to working with exporters, manufacturers, suppliers, wholesaler, traders, service providers & SMBs in digitalisation of their business and connecting them to the right buyers. GETATOZ is highly trusted B2B Marketplace for the online promotion of products, services & softwares.</p2>
	</div>
</div>
<center><i><b>copyright@<?php echo date("Y");?></b></i></center>
</body>
</script>
</html>