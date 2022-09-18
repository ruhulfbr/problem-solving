<?php
class Solution {
    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $results = [];
        if( !empty($words) ){
            foreach($words as $word){
                if( $this->checkHasWord($word) ){
                    $results[] = $word;
                }
            }
        }

        return $results;
    }
    
    private function checkHasWord($word){  
        $line_1 = ['q','w','e','r','t','y','u','i','o','p'];
        $line_2 = ['a','s','d','f','g','h','j','k','l'];
        $line_3 = ['z','x','c','v','b','n','m'];

        $word   = $this->splitString($word);

        if( $this->checkLetterExist($line_1, $word) || $this->checkLetterExist($line_2, $word) || $this->checkLetterExist($line_3, $word)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    private function checkLetterExist($line, $word){
        
        $letter_exist = 0;
        foreach ($word as $key => $value) {
            if( in_array($value, $line) ){
                $letter_exist++;
            }
        }

        if($letter_exist == count($word)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    private function splitString($string){
        $string = strtolower($string);
        $stringParts = str_split($string);
        return array_unique($stringParts);
    } 
}

$sulution = new Solution();

echo "<pre>";
print_r($sulution->findWords(["Hello", "Alaska","Dad","Peace"]));

?>