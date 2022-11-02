<?php 

//58. Length of Last Word
 
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $string_array = explode(' ', trim($s));
        
        return strlen(end($string_array));
    }
}