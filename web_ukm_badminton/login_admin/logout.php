<?php
	//delete cookies
	setcookie("username",null,time()-60,"/");
	
	//redirect to home
	header ("location: login.php");
	
 ?>