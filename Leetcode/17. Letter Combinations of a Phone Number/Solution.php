<?php

class Solution {

    /**
     * @param String $digits
     * @return String[]
     */

    private $combination_array = [];

    function letterCombinations($digits) {
        if( strlen($digits) > 0 ){

        	$stringArray = [];
        	for ($i=0; $i < strlen($digits); $i++) { 
        		if( $digits[$i] > 1 ){
        			$stringArray[] = $this->letterWithDigitts($digits[$i]);
        		}
        	}

        	$this->getCombination($stringArray);	        	
        	return $this->combination_array;

        }
        else{
        	return [];
        }
    }

    function getCombination($string){
    	for ($i=0; $i < strlen($string[0]); $i++) {

    		if( !empty($string[1]) ){
    			for ($j=0; $j < strlen($string[1]); $j++) { 

    				if( !empty($string[2]) ){
    					for ($l=0; $l < strlen($string[2]); $l++) { 

    						if( !empty($string[3]) ){
    							for ($k=0; $k < strlen($string[3]); $k++) { 
    								$this->combination_array[] = $string[0][$i].$string[1][$j].$string[2][$l].$string[3][$k];
    							}
    						}
    						else{
    							$this->combination_array[] = $string[0][$i].$string[1][$j].$string[2][$l];
    						}
    					}
    				}
    				else{
    					$this->combination_array[] = $string[0][$i].$string[1][$j];
    				}
	    			
	    		}
    		}
    		else{
    			$this->combination_array[] = $string[0][$i];
    		}
    	}
    }


    function letterWithDigitts($digit){
    	$array = [
    		'2' => 'abc',
    		'3' => 'def',
    		'4' => 'ghi',
    		'5' => 'jkl',
    		'6' => 'mno',
    		'7' => 'pqrs',
    		'8' => 'tuv',
    		'9' => 'wxyz',
    	];
    	return $array[$digit];
    }

} 