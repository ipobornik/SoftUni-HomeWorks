<?php
$n = 1024;
$result = array();

for ($i = 102; $i <= $n; $i++) {
	//cheking only 3-digit numbers
	if ($i > 999) {
		break;
	}

	$nAsString = (string)$i;
	if ($nAsString[0] !== $nAsString[1] && $nAsString[0] !== $nAsString[2] && $nAsString[1] !== $nAsString[2]) {
		array_push($result, $i);
	}
}
if (count($result) > 1) {
	//printing the array
	print_r($result);
} else {
	echo 'No';
}
?>