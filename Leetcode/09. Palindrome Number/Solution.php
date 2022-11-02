<?php
class Solution {

    //09. Palindrome Number

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($n) {
        $number = $n;  
        $sum = 0;  
        while(floor($number)) {  
            $rem = $number % 10;  
            $sum = $sum * 10 + $rem;  
            $number = $number/10;  
        }
        
        if( $sum == $n ){
            return true;
        }
        else{
            return false;
        }
        
    }
}


$solution = new Solution();

var_dump($solution->isPalindrome(121));

