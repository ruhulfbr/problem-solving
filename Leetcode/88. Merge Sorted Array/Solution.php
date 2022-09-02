<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        if($m > 0 && count($nums1) > $m){
            $nums1 = array_chunk($nums1, $m)[0];
        }
        else if($m == 0){
            $nums1 = [];
        }
        
        if($m > 0 && count($nums2) > $n){
            $nums2 = array_chunk($nums2, $n)[0];
        }

        $nums1 = array_merge($nums1, $nums2);
        sort($nums1);
        
        return NULL;
    }
}