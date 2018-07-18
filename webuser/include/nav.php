<?php
	session_start();
?>

<nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;display:none;right:0;" id="mySidebar">
  <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32"><i class="fa fa-times" style="font-size:20px"></i> Close</a> 
  <a href="guidance.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"> Guides & Advices</a> 
  <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"> Contact Us</a> 
  <a href="careers.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"> Work With Us</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"> Login</a>
  <a href="register.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16"> Register</a>
  <?php
  		if(isset($_SESSION['SESS_FIRSTNAME'] ))
			echo "<a href=\"logout.php\" onclick=\"w3_close()\" class=\"w3-bar-item w3-button w3-center w3-padding-16\" display = block> Logout</a>";
  ?>
  
  
</nav>