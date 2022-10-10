<?php  


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $unique = array_unique($nums);
        $duplicates = array_diff_assoc($nums, $unique);
        $singles = array_diff($unique, $duplicates); 
        return implode('', $singles);
    }
}