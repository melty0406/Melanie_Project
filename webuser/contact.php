<?php
  $error = 0;
  if(isset($_POST['submitted'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['subject'])){
      header("Location:main.php?success=true");
      exit();
    }else{
      $error =1;
    }
  }
?>
<!DOCTYPE html>

<head>
	<title>Contact Us | Creative Group</title>
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
  <?php include ("/include/header.php");?>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main w3-content" style="max-width:1000px;margin-top:50px">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkXC0uRxQQ_CvqeVED2ELYOcR0n8t63ps&callback=initMap"></script>
    <h4>Store</h4>
          <p><i class="fa fa-fw fa-map-marker"></i>Creative Group<div id="map"></div></p>
          <p><i class="fa fa-fw fa-phone"></i> 04-631 0138</p>
          <p><i class="fa fa-fw fa-envelope"></i> inti@mail.com</p>
          <h4>We accept</h4>
          <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
          <br>
    <h3>Contact Form</h3>

    <div class="container">
      <form method="post">
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

        <label for="subject">Subject</label><br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea><br>
        <input type="hidden" name="submitted">
        <input type="submit" value="Submit">
        <?php
          if ($error == 1) {
          echo "<br><br>";
          echo "<span style='color:red'>*</span>Please fill in all the fields<span style='color:red'>*</span>";
          }
        ?>
      </form>
    </div>

    <!-- Footer -->
    <?php include ("/include/footer.php"); ?>

  </div>
<!-- End page content -->
</body>
</html>
<script>
// Initialize and add the map
function initMap() {
  // The location 
  var location = {lat: 5.338940, lng: 100.286033};
  // The map, centered the location
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 17, center: location});
  // The marker, positioned the location
  var marker = new google.maps.Marker({position: location, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
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