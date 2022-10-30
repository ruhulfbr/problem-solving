<?php
class Solution {

    /**
     * @param String[] $words
     * @param String $order
     * @return Boolean
     */
    function isAlienSorted($words, $order) {
        $order = array_flip(str_split($order));
        $alphas = str_split('abcdefghijklmnopqrstuvwxyz');
        $words = array_map(function($val) use ($order, $alphas){
            $chars = str_split($val);
            $word = [];
            foreach($chars as $char){
                $word[] = $alphas[$order[$char]];
            }
            return implode('', $word);
        }, $words);
        $originalWords = $words;
        sort($words);
        return $words == $originalWords;
    }
}