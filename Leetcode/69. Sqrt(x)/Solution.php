<?php
//69. Sqrt(x)

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $x = sqrt($x);
        return intval($x);
    }
}