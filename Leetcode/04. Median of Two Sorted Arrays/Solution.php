<?php 

//04. Median of Two Sorted Arrays

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
         
         $merge_array = array_merge($nums1, $nums2);
         sort($merge_array);

         $middle_index = intdiv(count($merge_array), 2);

         if( (count($merge_array) % 2)  == 0){
            $m1 = $merge_array[$middle_index] + $merge_array[$middle_index-1];
            return $m1/2;
         }
         else{
            return $merge_array[$middle_index];
         }
         
         
    }
}

$solution =  new Solution();
echo $solution->findMedianSortedArrays([1,2], [3,4]);
echo "<br>".$solution->findMedianSortedArrays([1,3], [2]);

