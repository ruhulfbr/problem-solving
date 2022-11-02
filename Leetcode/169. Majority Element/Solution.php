<?php 

//169. Majority Element

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $mejority_el = [];
        foreach ($nums as $key => $num) {
        	$mejority_el[$num] = !empty($mejority_el[$num]) ? $mejority_el[$num] + 1 : 1;
        }
        return array_flip($mejority_el)[max($mejority_el)];
    }
} 