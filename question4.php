<p>
	A twin of a word is a word written with the same letters (case insensitive) but not in the same order. 
For example  Silent is a twin of  Listen. 
The  is_twin($a, $b) function should return  true if  b is the twin of  a and  false otherwise. a and b are 
two non-null strings. 
Write the body of the  is_twin($a, $b)  function.
</p>


<?php

//  function is_twin($a, $b) {
//  	$a = strtolower($a);
//  	$b = strtolower($b);
 	
//  	if(strlen($a)<3 || strlen($b)<3){
//  		 return false;
//  	}

// 	 if($a== strrev($b)){
// 	 return true;
// 	 }
// 	 return false;
// }

// echo is_twin('ten', 'net');

// echo strrev('silent');


function Twins($a, $b) {
  $flag = false;
  $a_len = strlen($a);
  $b_len = strlen($b);
	
	if($a_len != $b_len) {
		throw new Exception('array index count mismatched!');
	}
	$result = [];
	for($i = 0; $i<$a_len; $i++) {
		$a_val = $a[$i];
		$b_val = $b[$i];
		$a_val_arr = str_split($a_val);
		$b_val_arr = str_split($b_val);
		
		$flag = false;
		foreach($a_val_arr as $key => $val) {
			$b_key = array_search($val, $b_val_arr);
			if( ($key % 2 == 0 && $b_key % 2 == 0) || ($key % 2 != 0 && $b_key % 2 != 0) ) {
				$flag = true;
			} else if( ($key % 2 == 0 && $b_key % 2 != 0) || ($key % 2 != 0 && $b_key % 2 == 0)) {
				$flag = false;
				break;
			}
		}
		if($flag) {
			$result[$i] = "Yes";
		} else {
			$result[$i] = "No";
		}
		if(count($a_val_arr) != count($b_val_arr)) {
			$result[$i] = "string length mismatched!";
		}
	}
	return $result;
}

// $string1 = array("cdab", "dcba");
// $string2 = array("abcd", "abcd");
    
$result = Twins("ten", "ten");
echo implode("\n", $result);
 
?>