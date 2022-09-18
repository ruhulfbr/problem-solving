<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        
        if( count($list1) >  count($list2)){
            $loop_list = $list2;
            $else_list = $list1;
        }
        else{
            $loop_list = $list1;   
            $else_list = $list2;
        }

        $common_strings = [];
        $min_key_arr = [];

        foreach ($loop_list as $key => $value) {
            if( in_array($value, $else_list) ){
                $else_key = array_search($value, $else_list);
                $common_strings[] = $key+$else_key.'#'.$value;
                $min_key_arr[] = $key+$else_key;
            }
        }

        $min_key = min($min_key_arr);
        $common_str = [];

        if( !empty($common_strings) ){
            foreach ($common_strings as $key => $value) {
                $str_arr = explode('#', $value);
                if($str_arr[0] == $min_key){
                    $common_str[] = $str_arr[1];
                }
            }
        }

        return $common_str;
    }
}

$sulution = new Solution();

echo "<pre>";
print_r($sulution->findRestaurant(["happy","sad","good"], ["sad","happy","good"]));

echo "<pre>";
print_r($sulution->findRestaurant(["Shogun","Tapioca Express","Burger King","KFC"], ["KFC","Shogun","Burger King"]));

?>