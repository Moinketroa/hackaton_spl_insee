<?php

function find_range($array, $pos, $range){

	$i = 0;

	$result = array();

	foreach ($array as $row){
		$val = sqrt(pow($row['x'] - $pos['x'], 2) + pow($row['y'] - $pos['y'], 2));

		if ($val <= $range){
			$result[$i] = $row;
			$i++;
		} 
	}
	
	return $result;
}

?>
