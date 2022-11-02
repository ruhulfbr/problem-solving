<?php 

//03. Longest Substring Without Repeating Characters

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $subStrArray = [];

        if( strlen($s)  > 0){
            $string_array_index = 0;
            for( $i=0; $i<strlen($s); $i++ ){
                $subStrArray[$i] = $s[$i];
                for ($j=$i+1; $j < strlen($s); $j++) { 
                    if( strpos($subStrArray[$i], $s[$j]) === false){
                        $subStrArray[$i] .= $s[$j];
                    }
                    else{
                        break;
                    }
                }
            }
        }

        usort($subStrArray, function($a, $b) {
            return strlen($b) - strlen($a);
        });

        return $subStrArray[0] ? strlen($subStrArray[0]) : 0;
    }
}

$solution =  new Solution();

echo $solution->lengthOfLongestSubstring('abcabcbb');
echo '<br>'.$solution->lengthOfLongestSubstring('pwwkew');
echo '<br>'.$solution->lengthOfLongestSubstring('bbbbb');
echo '<br>'.$solution->lengthOfLongestSubstring("dvdf");
