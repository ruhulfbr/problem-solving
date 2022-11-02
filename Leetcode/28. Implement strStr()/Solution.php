<?php 

//28. Implement strStr()

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if( str_contains($haystack, $needle) ){
            return strpos($haystack, $needle);
        }
        else{
            return -1;
        }
    }
} 