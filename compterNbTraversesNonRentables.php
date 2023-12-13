<?php
$nbPassagers = array( 35,10,22,52,15,58,8,73) ;
$renta = 0 ;
 	
 for ($i = 0 ; $i < count($nbPassagers); $i = $i + 1 ){
	if ($nbPassagers[$i] <= 20 ) {
		$renta = $renta + 1 ;

	}
}	
		echo $renta," traversées non rentables le 22/09/2022\n";
?>
