<?php

//804. Unique Morse Code Words

class Solution {
    function uniqueMorseRepresentations($words) {
        $morse = $this->morses();

        $replaced = [];
        foreach($words as $word){
            $chars = str_split($word);
            $string = '';
            foreach($chars as $char){
                $string .= $morse[ord($char)-ord('a')];
            }
            $replaced[] = $string;
        }
        return count(array_unique($replaced));
    }

    private function morses(){
       return [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
    }
}