<?php


class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k) {
        $array = explode(' ', $s);
        return implode(" ", array_slice($array, 0, $k, true));
    }
}

$solution = new Solution();

echo "<pre>";
print_r($solution->truncateSentence('What is the solution to this problem', 4));
