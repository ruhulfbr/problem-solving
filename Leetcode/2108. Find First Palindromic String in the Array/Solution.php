<?php  

//2108. Find First Palindromic String in the Array

class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function firstPalindrome($words) {
    
       $plStr = "";
        foreach ($words as $key => $string) {
           if( $string == strrev($string)){
                $plStr = $string;

                break;
            }
        }

        return $plStr;
        
    }
}