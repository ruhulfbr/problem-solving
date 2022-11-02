<?php
class Solution {

    //121. Best Time to Buy and Sell Stock
    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $count = count($prices);
        if ($count < 2) {
            return 0;
        }

        $res = 0;

        $minVal = $prices[0];
        for ($i = 1; $i < $count; $i++) {
            $res = max($res, $prices[$i] - $minVal);
            $minVal = min($minVal, $prices[$i]);
        }
        return $res;
    }
}