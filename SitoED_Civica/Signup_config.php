<?php
//my dates
 $my_host = "localhost";
 $my_account = "huang4k";
 $my_password= "";
 $my_database="my_huang4k";
 
 // connect to database
 $connect = new mysqli($my_host, $my_account, $my_password, $my_database);
 if ($connect->connect_errno){
 	echo "Failed to connect to MySQL: " . $connect -> connect_error;
 }
 
 // get dates from html form
 $email=strtolower($_POST["Email"]);
 $username=strtolower($_POST["Username"]);
 $password= password_hash($_POST["password"], PASSWORD_DEFAULT);
 
 // comand SQL
 $query = "INSERT INTO My_Users (Email, Username, password) VALUES ('$email','$username','$password')";
 if ($connect-> query($query)){
 	header("Location: Login.html ");
 	}else {
 	echo "Error, with registration ". $connect->error. "\n";
	}
 $connect->close();
 ?>

