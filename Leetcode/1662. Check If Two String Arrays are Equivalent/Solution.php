<?php

//1662. Check If Two String Arrays are Equivalent

class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {        
        return implode('', $word1) == implode('', $word2);
    }
}
