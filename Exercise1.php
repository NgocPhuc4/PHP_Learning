<?php
	$a = 1.0;
	$b = 4.0;
	$c = 3.0;

	if ($a == 0) {
		
		if ($b == 0) {
			if ($c == 0) 
				echo "Phương trình có vô số nghiệm!";
			else 
				echo "Phương trình vô nghiệm";
		}
		else {
			$x = ($c) / -$b;
			if($x != 0)
				echo "Phương trình có nghiệm là: ". $x;
			else 
				echo "Phương trình có nghiệm là: 0";
		}
	}
	else {
		$denta = $b * $b - 4 * $a * $c;
		if ($denta > 0) {
			$x1 = (-$b + sqrt($denta)) / (2 * $a);
			$x2 = (-$b - sqrt($denta)) / (2 * $a);
			echo "Phương trình có 2 nghiệm phân biệt: <br>";
			echo "x1 = $x1 <br>";
			echo "x2 = $x2 <br>";
		}
		else {
			if($denta == 0) {
				$x12 = -$b / (2 * $a);
				echo "Phương trình có nghiệm kép x = $x12";
			}
			else {
				echo "Phương trình vô nghiệm!";
			}
			
		}
	}
?>