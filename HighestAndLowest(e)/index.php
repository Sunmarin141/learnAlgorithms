<?php

//решил 2 способами

function highAndLow(string $numbers): string {
    $numbers = explode(' ',$numbers);
    $min = $numbers[0];
    $max = $numbers[0];
    foreach($numbers as $number){
        if($number > $max){
            $max = $number;
        }else if($number < $min){
            $min = $number;
        }
    }
    return $max ." " . $min; 
}

// function highAndLow(string $numbers): string {
//     $x = explode(' ',$numbers);
//     return max($x) ." " . min($x);
// }


echo highAndLow('4 5 29 54 4 0 -214 542 -64 1 -3 6 -6');