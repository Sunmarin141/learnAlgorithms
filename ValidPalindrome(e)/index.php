<?php

function isPalindrome($s) {
    $alphabet = range('a','z');
    $numbers = [0,1,2,3,4,5,6,7,8,9];
    $new_s = [];
    foreach(mb_str_split(strtolower($s)) as $char){
        if(in_array($char,$alphabet) || in_array($char,$numbers)){
            array_push($new_s,$char);
        }
    }
    return array_reverse($new_s) == $new_s;
}

var_dump(isPalindrome("A man, a plan, a canal: Panama"));