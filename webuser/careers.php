<!DOCTYPE html>

<head>
	<title>Work With Us | Creative Group</title>
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
  <?php include ("/include/nav.php");?>

  <!-- Top header -->
  <?php include ("/include/header.php");?>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">
  <h3>Want Join Us?</h3>
  <center>
    <img src="images/joinus.jpg" alt="Join Us!" width="70%" height="100%">
  </center>

  At Creative Group sd. bhd, we look for enthusiastic individuals to join our team. Our main purpose is to raise the safety awareness among public. If you are interested in offering help and ideas for any electrical devices,then we might have a position for you.
  From time to time we look for the very best to join our team and if you have that desire to work please email us at inti@mail.com<br><br>



  <!-- End page content -->
  </div>

  <!-- Footer -->
  <?php include ("/include/footer.php"); ?>
  
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

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>