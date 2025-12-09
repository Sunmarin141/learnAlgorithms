<?php

function isPalindrome($x) {
    return strrev((string)$x) == $x;
}

var_dump(isPalindrome(121));