<?php
	//Start session
	session_start();
 
	//Include database connection details
	$conn = mysqli_connect("localhost", "root","");
	mysqli_select_db($conn,"simple_login");
	
 
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to remove odd symbols from text received from the form. Prevents SQL injection 
	function clean($str) {
		echo "str: ".$str;
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysqli_real_escape_string($str);
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['LOGINERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM member WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
			$_SESSION['SESS_USERNAME'] = $member['username'];
			$_SESSION['SESS_FIRSTNAME'] = $member['fname'];
			$_SESSION['SESS_LASTNAME'] = $member['lname'];
			session_write_close();
			header("location: main.php?login=true");
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'Incorrect Username or Password';
			$errflag = true;
			if($errflag) {
				$_SESSION['LOGINERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>