<?php
//748. Shortest Completing Word

class Solution {

    /**
     * @param String $licensePlate
     * @param String[] $words
     * @return String
     */
    function shortestCompletingWord($licensePlate, $words) {
        $plateCounts = [];
        $licenseArray = str_split(strtolower($licensePlate));
        foreach($licenseArray as $val){
            if(($val>='a' && $val<='z')||($val>='A' && $val<='Z')){
                if(!isset($plateCounts[$val])){
                    $plateCounts[$val] = 0;
                }
                $plateCounts[$val] += 1;
            }
        };
        $match = null;
            foreach($words as $word){
        $wordCounts = array_count_values(str_split($word));
        $failed = false;
        foreach($plateCounts as $char => $amount){
            if(!isset($wordCounts[$char])){
                $failed = true;
                break;
            }
            if($amount > $wordCounts[$char]){
                $failed = true;
                break;
            }
        }
        if(!$failed){
            if(is_null($match)){
                $match = $word;
            }
            else{
                if(strlen($match)>strlen($word)){
                    $match = $word;
                }
            }
        }
    }
        return $match;
    }
}