<?php

 $passagens = 0;
 $total = 0;
 
 $passagens = $_POST["passagens"];
 
 while ($passagens > 0){
    
	if ($passagens > 4){
	   $total = $total + 2.80;
	}
	else { 
	  $total = $total + 1.40;
	}
	
	$passagens = $passagens -1;
	
}

echo " O valor da passagem Ã© R$:" . $total;

?>
