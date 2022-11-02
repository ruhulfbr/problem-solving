<?php

//26. Remove Duplicates from Sorted Array

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $nums = array_unique($nums);
        return count($nums);
    }
}