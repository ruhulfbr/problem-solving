<?php

//2053. Kth Distinct String in an Array

class Solution {

    /**
     * @param String[] $arr
     * @param Integer $k
     * @return String
     */
    function kthDistinct($arr, $k) {
        $n = count($arr);
        $dist_count = 0;
        for ($i = 0; $i < $n; $i++)
        {
            // Check if current element
            // is present somewhere else.
            $j;
            for ($j = 0; $j < $n; $j++)
                if ($i != $j && $arr[$j] ==
                                $arr[$i])
                    break;

            // If element is unique
            if ($j == $n)
                $dist_count++;

            if ($dist_count == $k)
                return $arr[$i];
        }

        return '';
    }
}
