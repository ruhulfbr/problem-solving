<?php

class Solution {
    function diStringMatch($S) {
        $S = str_split($S);
        $n = range(0,count($S));
        $nums = [array_shift($n)];
        $currentPosition = 0;
        foreach($S as $s){
            if($s == 'I'){
                $nums[] = array_shift($n);
            }
            else{
                $left = ($currentPosition>=0 ?array_slice($nums,0,$currentPosition):[]);
                $right = ($currentPosition<count($nums)?array_slice($nums,$currentPosition):[]);
                $middle = [array_pop($n)];
                $nums = array_merge($left,$middle,$right);
            }
            $currentPosition++;
        }
       return $nums;
    }
}