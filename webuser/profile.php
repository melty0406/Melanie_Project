<!DOCTYPE html>
<html>
<head>
	<title>Home | Creative Group</title>
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

	<?php
		if(isset($_SESSION['SESS_FIRSTNAME'] )){
			$username = $_SESSION['SESS_FIRSTNAME'];
			$id = $_SESSION['SESS_MEMBER_ID'];
			$username = $_SESSION['SESS_USERNAME']; 
			$fname = $_SESSION['SESS_FIRSTNAME']; 
			$lname = $_SESSION['SESS_LASTNAME']; 
		}
		else{
			print "<script type = 'text/javascript'>alert(\"Please log in!\")</script>";
			print "<script >location.href='main.php'</script>";
			exit();
		}
	?>

	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">
		<h1><?php echo $fname."'s Profile"; ?> </h1>

		<img src="images/profile.png">
		</center>		
		<div class = "container">
			<h2>Full Name: <?php echo $fname." ".$lname; ?></h2>
			<h2>Username: <?php echo $username; ?></h2>

			<br><br>



		


	<!-- End page content -->
	</div>
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
