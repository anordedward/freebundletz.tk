<?php 
session_start(); 
if(isset($_POST['submit'])){
	$network = $_POST['network'];
	$phonenumber = $_POST['number'];

	if(($network == "VODACOM") AND ($phonenumber>=740000000) AND($phonenumber<=769999999)){
		$_SESSION['network'] = $network;
		$_SESSION['number'] = $phonenumber;
		header("location:getbandle.php");
	} else if(($network == "TIGO") AND ($phonenumber>=650000000) AND($phonenumber<=719999999)){
		 $_SESSION['network'] = $network;
		$_SESSION['number'] = $phonenumber;
		header("location:getbandle.php");
	}else if(($network == "AIRTEL") AND ($phonenumber>=680000000) AND($phonenumber<=799999999)){
		 $_SESSION['network'] = $network;
		$_SESSION['number'] = $phonenumber;
		header("location:getbandle.php");
	}else if(($network == "HALOTEL") AND ($phonenumber>=620000000) AND($phonenumber<=729999999)){
		 $_SESSION['network'] = $network;
		$_SESSION['number'] = $phonenumber;
		header("location:getbandle.php");
	}else if(($network == "TTCL") AND ($phonenumber>=730000000) AND($phonenumber<=739999999)){
		 $_SESSION['network'] = $network;
		$_SESSION['number'] = $phonenumber;
		header("location:getbandle.php");
	}else if(($network == "ZANTEL") AND ($phonenumber>=770000000) AND($phonenumber<=779999999)){
		 $_SESSION['network'] = $network;
		$_SESSION['number'] = $phonenumber;
		header("location:getbandle.php");
	} else{
		$error = "Enter $network number";
	}
}
?>