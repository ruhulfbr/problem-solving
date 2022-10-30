<?php


class Solution {
    function shortestToChar($S, $C) {
        $S = str_split($S);
        $keys = array_keys($S,$C);
        $distances = [];
        $prev = 0;
        foreach($S as $index => $char){
            $dist = abs($keys[$prev] - $index);
            if($index > $keys[$prev] && isset($keys[$prev+1])){
                $dist = min($index-$keys[$prev],$keys[$prev+1]-$index);
                if($dist == 0){
                    $prev++;
                }
            }
            $distances[] = $dist;
        }

        return $distances;
    }
}