<?php
//my dates
 $my_host = "localhost";
 $my_account = "huang4k";
 $my_password= "";
 $my_database="my_huang4k";
 $tab_name="My_Users";
 
// connect to database
 $connect = new mysqli($my_host, $my_account, $my_password, $my_database);
 if ($connect->connect_errno){
 	echo "Failed to connect to MySQL: " . $connect -> connect_error;
 }
 
// get dates from html form
 $username=strtolower($_POST["Username"]);
 $password=$_POST["password"];
 
//protezione per SQL Injection
 $username = stripslashes($username);
 $password = stripslashes($password);
 $username = $connect->real_escape_string($username);
 $password = $connect->real_escape_string($password);
 
//Reading from my database
 $Bool = false;
 $query= "SELECT * FROM $tab_name WHERE Username='$username'";
 $query_result= $connect->query($query);
 $n_rows = $query_result->num_rows;

//control and access
 if ($n_rows==1){
	$row= $query_result->fetch_assoc();
 	$passcripted= $row['Password'];
 	$password = $_POST["password"];

 	if (password_verify($password,$passcripted)){
	 	$Bool = true;
	}
 }
 
 if ($Bool){
 session_start();
 $_SESSION['Username'] = $username;
 $_SESSION['password'] = $password;
 header("Location: GDPR.html ");
 } else {
 echo "Login failed: email or password are wrong <br>";
 }
?>
