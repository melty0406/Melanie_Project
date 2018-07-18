<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_USERNAME']);
	unset($_SESSION['SESS_FIRSTNAME']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | Creative Group</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php include ("style.css"); ?>
</head>

<body class="w3-light-grey">

	<!-- Sidebar/menu -->
	<?php include ("include/nav.php"); ?>

	<!-- Header -->
	<?php include ("include/header.php"); ?>

	<div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">
		<div class="container">
			<h2>Log in</h2>

			<form method="post" name="loginform" action="login_exec.php">
				Username<br>
				<input type="text" name="username" value=""><br>

				Password<br>
				<input type="text" name="password" value="">
				
				<h1></h1>
				<input type="hidden" name="submitted">
				<input type="submit" name="submit" value="Log in">
				&nbsp;&nbsp;&nbsp;<a href="register.php">Not a member?</a>

				<!--the code below is used to display the message of the input validation-->
		 		<?php
					if( isset($_SESSION['LOGINERRMSG_ARR']) && is_array($_SESSION['LOGINERRMSG_ARR']) && count($_SESSION['LOGINERRMSG_ARR']) >0 ) {
						foreach($_SESSION['LOGINERRMSG_ARR'] as $msg) {
							echo "<p style='color:red'><b>$msg</b></p>";
						}
					unset($_SESSION['LOGINERRMSG_ARR']);
					}
				?>
			</form>
		</div>

	<!-- End page content -->
	</div>
	
	<!-- Footer -->
	<?php include ("include/footer.php"); ?>

	<script>
	// Script to open and close sidebar
		function w3_open() {
   		document.getElementById("mySidebar").style.display = "block";
    	document.getElementById("myOverlay").style.display = "block";
	}

	function w3_close() {
    	document.getElementById("mySidebar").style.display = "none";
    	document.getElementById("myOverlay").style.display = "none";
	}
	</script>
</body>
</html>
