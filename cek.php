<?php
// $i = "";

// 	print "hi";

// while ($i < 8) {
// 	$i++;
// 	print "hello<br>";
// }

// for ($i = 0; $i < 5; $i++) {
// 	for ($j = $i; $j > 0; $i--) {
// 		echo $i;		
// 	}
// }

// $a = array("hi", "hello", "bye");

// foreach ($a as $value) {
// 	if (count($a) == 2){
// 		print $value;
// 	}
// }

// for ($count = 1; $count < 20; $count++); print $count;

// $numbers 	= array(1,2,3,4);
// $total 		= count($numbers);
// $sum 		= 0;
// $output		= "";
// $i 			= 0;

// foreach($numbers as $number) {
// 	$i = $i + 1;
// 	if ($i < $total) {
// 		$sum = $sum + $number;
// 	}
// }
// echo $sum;

$a = '1';
$b = &$a;
$b = "2$b";
echo $a.", ".$b;

?> 