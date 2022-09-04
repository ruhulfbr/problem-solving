<?php


class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $org_int = $x;          
        $x = (string) $x;  
        $x = strrev($x);             
        $x = (int) $x;

        $x = $org_int < 0 ? (0 - $x) : $x;

        if( $x >= -pow(2, 31) && $x <= pow(2, 31)){
            return $x;
        }
        else{
          return 0;
        }
    }
}

$solution = new Solution();

echo $solution->reverse(1534236469);