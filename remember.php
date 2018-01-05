<?php
//session_start();
if(!empty($_POST["login"])) {
	$conn = mysqli_connect("localhost", "root", "", "user");
	$sql = "Select * from userdata where uname = '" . $_POST["uname"] . "' and password = '" . md5($_POST["password"]) . "'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["id"]		   = $user["id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("uname",$_POST["uname"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["uname"])) {
					setcookie ("uname","");
				}
				if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}
?>