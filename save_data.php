<?php
$un = $_POST['txtusername'];
$pw = $_POST['txtpassword'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$email = $_POST['txtemail'];

include('includes/connection.php');

$sql = "INSERT INTO userdata(`id`,`uname`, `password`, `fname`, `lname`, `email`) VALUES(NULL,'$un','$pw','$fn','$ln','$email')";

if (mysql_query($sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysql_error());
}

?>