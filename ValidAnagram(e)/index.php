<?php 

function isAnagram($s, $t) {
    $s = str_split($s);
    $t = str_split($t);
    sort($s);
    sort($t);
    return($s===$t);
}

var_dump(isAnagram('rat','car'));