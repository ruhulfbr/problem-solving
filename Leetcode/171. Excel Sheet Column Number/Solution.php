<?php  

//171. Excel Sheet Column Number

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
        $alphabets = array_flip(range('A', 'Z'));
		$number = 0;
		
		for ($i=0; $i < strlen($columnTitle); $i++) { 
			$strPos = $alphabets[$columnTitle[$i]] + 1;

			if( $i > 0 ){
				$number = ($number * 26) + $strPos;
			}else{
				$number = $strPos;
			}
		}

		return $number;
    }
}