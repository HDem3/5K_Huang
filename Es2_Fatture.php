<!DOCTYPE html>
<html>
<body>
<?php
	$Fatture = array (
		array("Cliente"=>Marco,"Importo"=>52.45,"Pagato"=>"NO"),
        array("Cliente"=>Andrea,"Importo"=>100.25,"Pagato"=>"SOSPESA"),
        array("Cliente"=>Luca,"Importo"=>13.14,"Pagato"=>"NO")
	);
    
    $TotPag=0;
	
    for ($x = 0; $x <count($Fatture); $x++) {
		if($Fatture[$x]["Pagato"]=="NO"){
        $TotPag = $TotPag + $Fatture[$x]["Importo"];	
        echo $Fatture[$x]["Cliente"]."<br>Importo da pagare: ".$Fatture[$x]["Importo"]." euro<br>Stato Pagamento: ".$Fatture[$x]["Pagato"]."<br><br>";
        };
	};
    echo "<br>Totale da pagare: ".$TotPag." euro";
?>
</body>
</html>
