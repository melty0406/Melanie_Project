<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);

	if(isset($_SESSION['SESS_MEMBER_USERNAME'])){
		print "<script type = 'text/javascript'>alert(\"Register Successful!\")</script>";
	}
?>
<!DOCTYPE html>
<head>
	<title>Ryan Blooms | Penang's Best Florist | Register</title>
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

	<!-- Top header -->
	<?php include ("include/header.php"); ?>

	<div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">
		<div class="container">
		<h2>Register</h2>
		<span style='color:red'>*</span> required fields.
		<form method="post" action = "register_exec.php">
			First Name<span style='color:red'>*</span><br>
			<input type="text" name="fname" value="" placeholder="Your name.." required><br>

			Last Name<span style='color:red'>*</span><br>
			<input type="text" name="lname" value="" placeholder="Your last name.." required><br>

			Date of birth (DD/MM/YY)<span style='color:red'>*</span><br>
			<select name="day" class="day">
				<?php
					for ($day=1; $day < 32; $day++) { 
						echo "<option value='$day'>$day</option>";
					}
				?>
			</select>

			<select name="month" class="month">
				<?php
					for ($month=1; $month < 13; $month++) { 
						echo "<option value='$month'>$month</option>";
					}
				?>
			</select>

			<select name="year" class="year">
				<?php
					for ($year=date('Y'); $year >= 1900; $year--) { 
						echo "<option value='$year'>$year</option>";
					}
				?>
			</select>
			<br>

			Username<span style='color:red'>*</span><br>
			<input type="text" name="username" value="" required><br>

			Password<span style='color:red'>*</span><br>
			<input type="text" name="password" value="" required><br>

			<input type="hidden" name="submitted"><h1></h1>
			<input type="submit" name="submit" value="Submit">
			<?php
				if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
					foreach($_SESSION['ERRMSG_ARR'] as $msg) {
						echo "<p style='color:red'><b>$msg</b></p>";
					}
				unset($_SESSION['ERRMSG_ARR']);
				}
			?>
		</form>
		</div>
	
	</div>
	<!-- Footer -->
	<?php include ("/include/footer.php"); ?>

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
