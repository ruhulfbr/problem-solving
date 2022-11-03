<?php 

//2114. Maximum Number of Words Found in Sentences

class Solution {

    /**
     * @param String[] $sentences
     * @return Integer
     */
    function mostWordsFound($sentences) {
       $maxWord = 0;
        foreach ($sentences as $key => $sentence) {
            $totalWord = str_word_count($sentence);
            if($maxWord < $totalWord){
                $maxWord = $totalWord;
            }
        }

        return $maxWord;
    }
} 