<?php
//https://www.codewars.com/kata/597d75744f4190857a00008d

function paintLetterboxes(int $start, int $end) {
    $arr = [0,0,0,0,0,0,0,0,0,0];

    for(;$start<=$end;$start++){
        $str_number = strval($start);
        foreach(str_split($str_number) as $n){
            $arr[$n] += 1;
        }
    }
    return $arr;

}

print_r(paintLetterboxes(125,132));