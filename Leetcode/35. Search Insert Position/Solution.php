<?php 
 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if( in_array($target, $nums) ){
            return array_search($target, $nums);
        }
        else{
            foreach($nums as $key => $num){
                if($key == 0 && $target < $num){
                    return 0;
                }
                else if( $num < $target && $target < $nums[$key+1]){
                    return $key+1;
                }
                else if($num == end($nums)){
                    return $key+1;
                }
             }
        }
    }
}