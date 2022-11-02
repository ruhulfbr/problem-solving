<?php 

//2255. Count Prefixes of a Given String

class Solution {

    /**
     * @param String[] $words
     * @param String $s
     * @return Integer
     */
    function countPrefixes($words, $s) {
        $count = 0;
        foreach ($words as $key => $word) {
            if( $word == substr($s, 0, strlen($word)) ){
                $count++;
            }
        }

        return $count;
    }
} 