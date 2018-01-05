<?php
// $un = $_POST['username'];
$pwd = $_POST['password'];

include 'includes/connection.php';

$sql = "SELECT * FROM userdata WHERE password='$pwd'";
$result =mysql_query($sql);

$num = mysql_num_rows($result);

if($num==1)
{
  session_start();
  $_SESSION['pwd'] = $pwd;
  header('location:index.php');
}
else
{
  session_start();
  $_SESSION['msg'] = '<h2>Invalid username or password!</h2>';
  header('location:login.php');
}
?>
