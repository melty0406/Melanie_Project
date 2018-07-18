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

		<h2>Electrical items</h2><br>

		Millions of people commit basic electric safety 'blunders' in the home without realising that they are exposing themselves to the risk of fire or electric shock.<br><br>

		Modern living means we are using more and more electrical appliances in the home. Just twenty years ago, the average home would have had a hi-fi system and one TV or video. Today, it is more likely that there are at least two TVs, a DVD player, a satellite receiver, games console, microwave, computer and more. So, the risk of electrical accidents in the home is much higher than before.<br><br>

		<hr width="100%" style="border-color:grey;">

		<h2>In this section</h2><br>
		<!-- Guides grid -->
		<div class="w3-row">
		  <div class="w3-col l3 s6">
		    <div class="w3-container">
		      <div class="w3-display-container">
		        <a href="guide.php?id=charger"><img src="https://www.electricalsafetyfirst.org.uk/media/100346479/8-phone-charger-redyellow.jpg?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		      </div>
		      <p><br><b>Charger</b></p>
		    </div>
		    <div class="w3-container">
		      <div class="w3-display-container">
		        <a href="guide.php?id=usbcharger"><img src="https://www.electricalsafetyfirst.org.uk/media/100663895/usb-type-a.jpg?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		        
		      </div>
		      <p><br><b>USB charger</b></p>
		    </div>
		  </div>
		  <div class="w3-col l3 s6">
		    <div class="w3-container">
		      <div class="w3-display-container">
		        <a href="guide.php?id=ecig"><img src="https://www.electricalsafetyfirst.org.uk/media/100357225/e-cigarettes-270x270px.jpg?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		        
		      </div>
		      <p><br><b>E-CIGARETTES</b></p>
		    </div>
		    <div class="w3-container">
		      <div class="w3-display-container">
		         <a href="guide.php?id=drone"><img src="https://www.electricalsafetyfirst.org.uk/media/100785968/drone-drawing.png?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		        
		      </div>
		      <p><br><b>Drone</b></p>
		    </div>
		  </div>
		  <div class="w3-col l3 s6">
		    <div class="w3-container">
		      <div class="w3-display-container">
		         <a href="guide.php?id=powerb"><img src="https://www.electricalsafetyfirst.org.uk/media/100497930/powerbank-drawing.jpg?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d"></a>
		        
		      </div>
		      <p><br><b>Power Banks</b></p>
		    </div>
		    <div class="w3-container">
		      <div class="w3-display-container">
		         <a href="guide.php?id=washm"><img src="https://www.electricalsafetyfirst.org.uk/media/100926298/washing-machine.png?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		       
		      </div>
		      <p><br><b>Washing machine</b></p>
		    </div>
		  </div>
		  <div class="w3-col l3 s6">
		    <div class="w3-container">
		      <div class="w3-display-container">
		         <a href="guide.php?id=microwave"><img src="https://www.electricalsafetyfirst.org.uk/media/100374999/4-microwave-redyellow.jpg?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		       
		      </div>
		      <p><br><b>Microwave</b></p>
		    </div>
		    <div class="w3-container">
		      <div class="w3-display-container">
		         <a href="guide.php?id=ricec"><img src="https://www.electricalsafetyfirst.org.uk/media/100936350/rice-cooker.jpg?preset=signpost_item&cb=ecdb838373c5402680c943b3fdb3402d" ></a>
		        
		      </div>
		      <p><br><b>Rice Cooker</b></p>
		    </div>
		  </div>
		</div>
		

	<!-- End page content -->
	</div>

	<!-- Footer -->
	<?php include ("include/footer.php");?>

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
