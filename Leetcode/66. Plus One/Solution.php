<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        
        $digit_array = $digits;
        $last_digit = end($digit_array) + 1;
        array_pop($digit_array);
        if($last_digit > 9){
            $last_digit = array_map('intval', str_split($last_digit));
            return array_merge($digit_array, $last_digit);
        }else{
            $digit_array[] = $last_digit;
            
            return $digit_array;
        }
    

    }
}