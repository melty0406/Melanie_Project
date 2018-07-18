<?php

	if(isset($_POST['settings_submission'])){
		if(isset($_POST['country']) && isset($_POST['language']) && isset($_POST['currency'])){
			
			setcookie('country', $_POST['country']);
			setcookie('language', $_POST['language']);
			setcookie('currency', $_POST['currency']);

			print "<script type = 'text/javascript'>alert(\"Successful!\")</script>";
			print "<script >location.href='main.php'</script>";
		
			exit();
		}
		else{
			header("Refresh:0");
			print "<script type = 'text/javascript'>alert(\"Fail!\")</script>";
		
			exit();
		}
	}
?>
<!-- REGIONAL, LANGUAGE, AND CURRENCY SETTINGS -->
<!DOCTYPE html>
<html>
<head>
	<title>Settings | Creative Group</title>
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
	<?php include ("/include/nav.php"); ?>
	  
	<!-- Top header -->
	<?php include ("/include/header.php"); ?>
	<div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">
		<div class="container" align="center">
			<form method="post" action = "regional.php">
				<h2>Settings</h2>

				<h3>Country</h3>
					<select class='lang' name="country">
					<option value='Malaysiah'>Malaysia</option>
					<option value='Singapore'>Singapore</option>
					</select>

				<h3>Language</h3>
					<select class='lang' name="language">
					<option value='English'>English</option>
					<option value='Malay'>Malay</option>
					</select>

				<h3>Currency</h3>
					<select class='curr' name="currency">
					<option value='Ringgit Malaysia'>RM</option>
					<option value='Indonesia Rupee'>Rp</option>
					</select>
					<br><br>
				<!--  -->
				<input type="submit" name="settings_submission" value="Save">
			</form>
		</div>
	</div>
	<!-- Footer -->
	<?php include ("/include/footer.php"); ?>
	<!-- End page content -->
</body>
</html>
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