<?php
if(isset($_COOKIE["uid"])){
	setcookie("uid","",-3600);
}
if(isset($_COOKIE["aid"])){
	setcookie("aid","",-3600);
}
header("location: login.php");
?>