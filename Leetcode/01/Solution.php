<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        for( $i=0; $i < count($nums); $i++ ){
            
          for( $j=$i+1; $j < count($nums); $j++ ){
            
              if( $nums[$i] + $nums[$j] === $target){
                  return [$i,  $j];
              }
            
          }   
            
        }
    }
}

$solution = new Solution();

echo "<pre>";
print_r($solution->twoSum([2,7,11,15], 9));

echo "<pre>";
print_r($solution->twoSum([3,2,4], 6));