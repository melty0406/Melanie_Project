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

	<!-- !PAGE CONTENT! -->
	<div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">


	
		<h1>SAFETY FIRST</h1>

		<iframe width="420" height="345" src="https://www.youtube.com/embed/l60MnDJklnM?controls=0">
		</iframe><BR>
		Electrical items
		Product misuse is the top cause of accidental fires in British homes and the number has increased by over a third since 2009.

		Millions of people commit basic electric safety 'blunders' in the home without realising that they are exposing themselves to the risk of fire or electric shock.

		Modern living means we are using more and more electrical appliances in the home. Just twenty years ago, the average UK home would have had a hi-fi system and one TV or video. Today, it is more likely that there are at least two TVs, a DVD player, a satellite receiver, games console, microwave, computer and more. So, the risk of electrical accidents in the home is much higher than before.

	<!-- End page content -->
	</div>


	<!-- Footer -->
	<?php include ("include/footer.php"); ?>
	
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
