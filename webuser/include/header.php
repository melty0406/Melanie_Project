<?php
	session_start();

?>
<header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
	<span class="w3-left w3-padding">
    <img src = "images/logo.jpg" width="10%" height="10%">
		<a href="main.php" style="text-decoration: inherit;"><b> Creative Group</b></a>
	</span>

  	<a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">
  		<i class="fa fa-align-justify" style="font-size:24px;"></i>
  	</a>

  	<a href="regional.php" class="w3-right w3-button w3-white" >
  		<i class="fa fa-cog" style="font-size:24px;"></i>
  	</a>

  	<a href="profile.php" class="w3-right w3-button w3-white" >
  		<i class="fa fa-user">
  			<span style="font-family:Montserrat;font-size:20px;"> 
  			<?php
  				if(isset($_SESSION['SESS_FIRSTNAME'] )){
  					echo $_SESSION['SESS_FIRSTNAME'] ; 
  				}
				else{
					echo "";
				}	
			?>
				
			</span>
		</i>
	</a>  	

</header>

