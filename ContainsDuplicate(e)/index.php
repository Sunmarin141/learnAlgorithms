<?php 

function containsDuplicate(array $nums) {  
    $uniq = array_unique($nums);
    return $nums !== $uniq;
}

var_dump(containsDuplicate([3,4]));