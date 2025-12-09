<?php

function generateShape(int $n): string {
    $str = '';
    for($i = 0;$n>$i;$i++){
        for($j = 0;$n>$j;$j++){
            $str .= "+";
        }
        if($i == $n-1){
            break;
        }
        $str .= PHP_EOL;
    }
    return $str; 
}

//я не знал про str_repeat

echo generateShape(5);