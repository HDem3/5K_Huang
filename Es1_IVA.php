<!DOCTYPE html>
<html>
<body>
<?php
	$Prodotti = array (
		array("Nome"=>"Pane","Prezzo"=>0.21,"Quantita'"=>5,"IVA"=>0,"TotPag"=>0),
		array("Nome"=>"Latte","Prezzo"=>1.37,"Quantita'"=>2,"IVA"=>0,"TotPag"=>0),
		array("Nome"=>"Mela","Prezzo"=>0.12,"Quantita'"=>5,"IVA"=>0,"TotPag"=>0)
	);
    
    $IVA=22;
    
	for ($x = 0; $x <count($Prodotti); $x++) {
		$Prodotti[$x]["IVA"]=$Prodotti[$x]["Prezzo"]*$Prodotti[$x]["Quantita'"]/100*$IVA;
		$Prodotti[$x]["TotPag"]=$Prodotti[$x]["Prezzo"]*$Prodotti[$x]["Quantita'"]+$Prodotti[$x]["IVA"];
    };
    
	for ($x = 0; $x <count($Prodotti); $x++) {
//		echo $Prodotti[$x]["Nome"]."<br>Costo: ".$Prodotti[$x]["Prezzo"]." euro<br>Quantita': ".$Prodotti[$x]["Quantita'"]."<br>IVA: ".$Prodotti[$x]["IVA"]." euro<br>Totale pagare: ".$Prodotti[$x]["TotPag"]." euro<br><br>";
		printf("%s<br>Costo: %.2f euro<br>Quantita': %d<br>IVA: %.2f euro<br>Totale pagare: %.2f euro<br><br>",$Prodotti[$x]["Nome"],$Prodotti[$x]["Prezzo"],$Prodotti[$x]["Quantita'"],$Prodotti[$x]["IVA"],$Prodotti[$x]["TotPag"]);
    }; 
?>
</body>
</html>
