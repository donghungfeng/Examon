<?php
	session_start();
	$user_name = "";
	$email = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'dethi');
	if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	if( isset($_POST['signup'])){
		$user_name = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$confirm_password = mysql_real_escape_string($_POST['confirm_password']);
		
		if( empty($user_name)){
			array_push($errors, "Username is required");
		}
		if( empty($email)){
			array_push($errors, "Email is required ");
		}
		if( empty($password)){
			array_push($errors, "Password is required ");
		}
		if( $password != $confirm_password){
			array_push($errors, "Password confirm do not exacly ");
		}
		if(count($errors) == 0){
			$password1 = md5($password);
			$sql1 = "INSERT INTO user (name_user, email, password)
						VALUES ('$user_name', '$email', '$password1')";
			mysqli_query($db, $sql1);
			$_SESSION['username'] = $user_name;
			$_SESSION['success'] = "Thành công";
			header('location: index.php');
		}
		
	}
	if(isset($_POST['login'])){
		$user_name = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['pass']);
		if( empty($user_name)){
			array_push($errors, "Username is required");
		}
		if( empty($password)){
			array_push($errors, "Password is required ");
		}
		if(count($errors) == 0){
			$password1 = md5($password);
			$sql2 = "SELECT * FROM user WHERE name_user = '$user_name' AND password='$password1'";
			$result = mysqli_query($db,$sql2);
			if(mysqli_num_rows($result) == 1){
				$_SESSION['username'] = $user_name;
				$_SESSION['success'] = "Thành công";
				header('location: index.php');
			}else{
				array_push($errors, "Username/Password combination");
			}
		}
	}
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}
?>