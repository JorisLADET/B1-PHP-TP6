<?php
$nbPassagers = array( 35,10,22,52,15,58,8,73) ;
 
 for ($i = 0 ; $i < count($nbPassagers); $i = $i + 1 ){
	if ($nbPassagers[$i] >= 20 ) {
		echo $i + 1," ";
	}
}	

?>
