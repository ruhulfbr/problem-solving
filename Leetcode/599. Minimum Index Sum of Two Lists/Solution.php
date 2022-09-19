<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $string_arr = [];
        $key_arr    = [];

        $min_key = 0;
        foreach ($list2 as $key => $value) {
            $key_2 = array_search($value, $list1);
            if( $key_2 !== false ){
                $string_arr[] = $key+$key_2.'#'.$value;
                $key_arr[] = $key+$key_2;
            }
        }

        $min_key = min($key_arr);
        $common_str_arr = [];

        if( !empty($string_arr) ){
            foreach ($string_arr as $key => $value) {
                $str_arr = explode('#', $value);
                if($str_arr[0] == $min_key){
                    $common_str_arr[] = $str_arr[1];
                }
            }
        }

        return $common_str_arr;
    }
}

$sulution = new Solution();

echo "<pre>";
print_r($sulution->findRestaurant(["happy","sad","good"], ["sad","happy","good"]));

echo "<pre>";
print_r($sulution->findRestaurant(["Shogun","Tapioca Express","Burger King","KFC"], ["KFC","Shogun","Burger King"]));

?>