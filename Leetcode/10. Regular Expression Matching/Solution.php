//10. Regular Expression Matching

<?php

class Solution {
    
    const WILDCARD = "*";
    const ANY_CHAR = ".";
    
    /**
     * @param String $string
     * @param String $pattern
     * @return Boolean
     */
    function isMatch($string, $pattern) 
    {
        if (!$pattern) {
            return !$string;
        }
        
        $matchResult = $string && ($string[0] === $pattern[0] || self::ANY_CHAR === $pattern[0]);
        $greedyMatch = !empty($pattern[1]) && $pattern[1] == self::WILDCARD;

        if (!$matchResult && !$greedyMatch) {
            return false;
        }

        if ($greedyMatch) {
            return ($matchResult && $this->isMatch(substr($string, 1), $pattern)) || $this->isMatch($string, substr($pattern, 2));
        }
        
        return $matchResult && $this->isMatch(substr($string, 1), substr($pattern, 1));
    }
}