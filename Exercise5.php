<?php
	$arrayName = array(1, 4, 2, 6, 9, 100, 4);

	$Length_Of_arrayName = count($arrayName);

	for ($i = $Length_Of_arrayName - 1; $i >= 0; $i--) { 
		echo $arrayName[$i] . " ";
	}
?>