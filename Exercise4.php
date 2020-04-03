<?php
	$Array_Name = array(1, 4, 2, 6, 9, 100, 45, 8, 20);

	$Length_Of_arrayName = count($Array_Name);

	$max = $Array_Name[0];


	for ($i=1; $i < $Length_Of_arrayName; $i++) { 
		if ($max < $Array_Name[$i]) {
			$max = $Array_Name[$i];
		}
	}


	echo "Phần tử lớn nhất của mảng là: $max";
?>