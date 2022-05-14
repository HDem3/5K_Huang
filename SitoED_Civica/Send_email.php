<?php
//my database
 $my_host = "localhost";
 $my_account = "huang4k";
 $my_password= "";
 $my_database="my_huang4k";
 
 // connect to database
 $connect = new mysqli($my_host, $my_account, $my_password, $my_database);
 if ($connect->connect_errno){
 	echo "Failed to connect to MySQL: " . $connect -> connect_error;
 }
 
 //get email from database
 $query = "SELECT * 
 		   FROM My_Users 
           WHERE Verify_Code>'1111'";
 $query_result= $connect->query($query);
 $n_rows = $query_result->num_rows;
 if ($n_rows==1){
 	$row= $query_result->fetch_assoc();
 	$email= $row['Email'];
 	
 }
	 
 
 //email setting
 $verify_code=rand(1111,8999);
 $object="Verify your email";
 $messagge='
 <html>
    <head>
      <title>Verify your email</title>
    </head>
    <body>
      <h1>Welcome to my site</h1>
      <p>Please verify your email, this is your code:</p>
        <h3>'.$verify_code.'</h3>
      <p>Thanks, have a nice day :)</p>
    </body>
  </html>';
  
 //send verify code via email
 $headers[] = 'MIME-Version: 1.0';
 $headers[] = 'Content-type: text/html; charset=utf-8';
 $verify_email= mail($email,$object,$messagge,implode("\r\n", $headers));
 
 //inserisci il nuovo verify code
 $query = "UPDATE My_Users
		   SET Verify_Code = '$verify_code'
		   WHERE Email = '$email' ;";
 if($connect-> query($query)){
 	header("Location: Verify_Email.html ");
 }
 
 $connect->close();
?>
