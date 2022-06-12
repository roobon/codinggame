<h1>PHP - Find the largest number
(200 / 200 pts)</h1>
<p>Implement the function findLargest(array $numbers) so it returns the largest number from the $numbers integer array.

Note: the array always contains at least one number.</p>

<?php

function findLargest(array $numbers) {
   
   $newarray = array();
    for($i=0; $i<count($numbers); $i++){
        if(is_int($numbers[$i])){
            break;
        }
    }
   $max =  max($numbers);
   return $max;
}
?>