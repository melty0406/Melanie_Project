<?php
	//Start session
	session_start();

	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);

	print "<script type = 'text/javascript'>alert(\"Logging out!\")</script>";
	print "<script >location.href='main.php'</script>";

	session_destroy();
		
	exit();
?>
