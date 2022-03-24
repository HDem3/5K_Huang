<?php


include("config.php");


$mysqli = @new mysqli($dbhost, $dbuname, $dbpass,$dbname);
	mysqli_select_db($mysqli,$dbname);



$query = "SELECT Cognome, Nome, Residenza, Stipendio
	FROM Dip_Impiegati
	WHERE Stipendio >=(SELECT MIN(Stipendio)
  FROM Dip_Impiegati) +10000;";




if ($result=@mysqli_query($mysqli, $query))
  {
  // Return the number of rows in result set
  $numOfRows=mysqli_num_rows($result);
  
//  printf("Result set has %d rows.<br>",$numOfRows);
  
  $numfields = mysqli_num_fields($result);

  if ($numOfRows>0){
	echo "<table class = dati>";
	echo " <tr>";
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	foreach($row as $x => $x_value) {
		echo "<th>" . $x . "</th>";   
	} 
	echo "</tr>";
	echo " <tr>";
 		foreach($row as $x => $x_value) {
			echo "<td>" . $x_value . "</td>";   
		} 
	echo "</tr>";

 
  for ($i = 1; $i < $numOfRows; $i++){
		echo " <tr>";
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		foreach($row as $x => $x_value) {
		echo "<td>" . $x_value . "</td>";   
		} 
		 echo "</tr>";
	}
	echo "</table><br>";
	}

  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($mysqli);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

  <head>
    <title>Visualizza query</title>
    <meta http-equiv="refresh" content="10">

    <link rel="stylesheet" type="text/css" href="stile_pagina.css"> 

  </head>

<body>
	
</body>

</html>
