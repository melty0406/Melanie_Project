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
 	
 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$birthday = $_POST['day']."/".$_POST['month']."/".$_POST['year'];
	$username = $_POST['username'];
	$password = $_POST['password'];

 
	//Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'First Name empty';
		$errflag = true;
	}
	else if($lname == '') {
		$errmsg_arr[] = 'Last Name empty';
		$errflag = true;
	}
	else if($username == '') {
		$errmsg_arr[] = 'Username empty';
		$errflag = true;
	}
	else if($birthday == '') {
		$errmsg_arr[] = 'Username empty';
		$errflag = true;
	}
	else if($password == '') {
		$errmsg_arr[] = 'Password empty';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the register form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: register.php");
		exit();
	}
 
	//Create query
	$qry="SELECT * FROM member WHERE username='$username' AND password='$password'";
	$result=mysqli_query($conn, $qry);
 
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//there is existing account
			$errmsg_arr[] = 'This account is existed. Please try again!';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: register.php");
				exit();
			}
		}else {
			//register Successful
			session_regenerate_id();
			
			$sql = "INSERT INTO member (fname, lname, username, password, time_created)
					VALUES ('$fname', '$lname', '$username','$password',now())";

			if ($conn->query($sql) === TRUE) {
				$_SESSION['SESS_MEMBER_USERNAME'] = $member['username'];
    			header("location: index.php");
				exit();
			} else {
				header("Refresh:0");
				print "<script type = 'text/javascript'>alert(\"Error: \" . $sql . \"<br>\" . $conn->error;)</script>";
				exit();
			}

			

		}
	}else {
		die("Query failed");
	}
?>