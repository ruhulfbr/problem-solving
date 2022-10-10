<?php  

class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $alphabets = range('A', 'Z');

        if( $columnNumber > 26 ){
            $strArray = [];
            while ($columnNumber > 0) {
                $rem = $columnNumber % 26;
                if( $rem == 0 ){
                    $strArray[] = "Z";
                    $columnNumber = floor($columnNumber / 26) - 1;
                }
                else{
                    $strArray[] = $alphabets[$rem-1];
                    $columnNumber = floor($columnNumber / 26);
                }
            }
            return implode('', array_reverse($strArray));
        }
        else{
            return $alphabets[$columnNumber-1];
        }
    }
}