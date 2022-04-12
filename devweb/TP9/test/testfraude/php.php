<!DOCTYPE html>
<html>
	<body>
		<div id="demo">
			taxe <input type="number" id="taxe1">
			taxe <input type="number" id="taxe2">
			taxe <input type="number" id="taxe3">
			<button type="button" onclick="payer()">Payer</button>
		</div>
	</body>
</html> 


<?php
    $mestaxes = json_decode($_GET["taxes"], false);
    
    $total = 0;
    $tva = 0.2;

    foreach($mestaxes as $name => $value)
    {
        $total+=$value*$tva;
    }
    echo "Le total est de ".$total;
?>