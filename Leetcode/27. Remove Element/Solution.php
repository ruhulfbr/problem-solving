<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        foreach($nums as $key => $num){
            if($val == $num){
               unset($nums[$key]);
            }
          }

          return count($nums);
    }
}