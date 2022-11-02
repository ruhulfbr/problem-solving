<?php
//13. Roman to Integer

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($romanNumber) {
        $roamn_array = [
          "I" => 1,
          "V" => 5,
          "X" => 10,
          "L" => 50,
          "C" => 100,
          "D" => 500,
          "M" => 1000
        ];
	    
	      $integer_value = 0;
	      for( $i=0; $i < strlen($romanNumber); $i++ ){
	          $current = $roamn_array[$romanNumber[$i]];
	         
	            
	         if( isset($romanNumber[$i + 1]) ){
	             $next = $roamn_array[$romanNumber[$i + 1]];
	             
	             if( $current <  $next){
	                $integer_value += $next - $current;
	                $i++;
	             }else{
	                $integer_value += $current;
	             }
	         }else{
	            $integer_value += $current;
	         }
	          
	      }
	      
	      return $integer_value;
    }
}