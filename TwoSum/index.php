<?php

function twoSum($nums, $target) {
    for($i = 0;count($nums) > $i;$i++){
        for($j = $i+1;count($nums) > $j;$j++){
            if($nums[$i] + $nums[$j] == $target){
            return [$i,$j];
            }
        }
    }
    return [];
}

print_r(twoSum([3,2,4],6));