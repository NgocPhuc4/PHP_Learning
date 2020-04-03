<?php
	$n = 5;
	$numerator = 1;
	$denominator = 1;
	$sum = 0.0;


	for ($i=0; $i < $n; $i++) { 
		$sum += $numerator / $denominator;

		$numerator ++;

		$denominator *= $numerator;
	}

	echo "Tổng S cần tính là: $sum";
?>