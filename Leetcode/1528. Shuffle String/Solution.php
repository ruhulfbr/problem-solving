<?php

class Solution {
/**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $res = $s;
        $l = strlen($s);
        for ($i = 0; $i < $l; $i++) {
            $res[$indices[$i]] = $s[$i];
        }
        return $res;
    }
}