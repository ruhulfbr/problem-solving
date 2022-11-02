<?php
//806. Number of Lines To Write String

class Solution {
    function numberOfLines($widths, $S) {
        $S = str_split($S);
        $rows = 1;
        $cols = 0;
        foreach($S as $s){
            $width = $widths[ord($s)-ord('a')];
            $cols += $width;
            if($cols>100){
                $rows++;
                $cols = $width;
            }
        }
        return [$rows,$cols];
    }
}