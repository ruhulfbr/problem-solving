<?php 

//2185. Counting Words With a Given Prefix
class Solution {

    /**
     * @param String[] $words
     * @param String $pref
     * @return Integer
     */
    function prefixCount($words, $pref) {
        $count = 0;
        foreach ($words as $key => $word) {
            if( $pref == substr($word, 0, strlen($pref)) ){
                $count++;
            }
        }

        return $count;
    }
}
