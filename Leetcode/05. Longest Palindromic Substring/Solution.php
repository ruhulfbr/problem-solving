 <?php 

class Solution {

    /**
     * @param String $s
     * @return String
     */




   function longestPalindrome($s) {
      if( strlen($s) == 1 ){
         return $s;
      }

      $target_string = '';
      for( $i=0; $i<strlen($s); $i++ ){
         for ($j=$i+1; $j <= strlen($s); $j++) { 
            $substr = substr($s, $i, $j - $i);
            if( strlen($substr) > strlen($target_string) && $this->checkPalindrome( $substr )){
               $target_string = $substr;
            }     
         }
      }

      return $target_string;     
   }

   private function checkPalindrome($string){
      if( $string == strrev($string) ){
         return TRUE;
      }
      else{
         return FALSE;
      }
   }
}

$solution =  new Solution();
// echo $solution->longestPalindrome("ContrarytopopularbeliefLoremIpsumisnotsimplyrandomtextIthasrootsinapie");
// echo $solution->longestPalindrome("vvgogaewginhopuxzwyryobjjpieyhwfopiowxmyylvcgsnhfcnogpqpukzmnpewavoutbloyrrhatimmxfqmcwgfebuoqbbgvubbkjfvxivjfijlpvtsnhagzfptahhyojwzamayoiegkenycnkxzkambimhdykdcxyyfjnvztzypmfczdhhnkmfuvgkhzbwmjznykkagqdrueohgcmeidjqsvfugcioeduohprjtfdmtzosnhoiganffarokxjifzzxhixdzycwfheqqegduzwtiacmdhqfmxhazcxsqyrvrihfqzjxvawdeandnwgjlquvzadruiqmcsgibglhicsvzqknztqpkiihdoisxipkourentfvrltieihiktgzswtgcmmlfrjifqinhrbplbsgswqlbjkyxjwoshsvxlhlpgzwbmxzwaemtowcxwourjwmmwjruowxcwotmeawzxmbwzgplhlxvshsowjxykjblqwsgsblpbrhniqfijrflmmcgtwszgtkihieitlrvftneruokpixsiodhiikpqtznkqzvscihlgbigscmqiurdazvuqljgwndnaedwavxjzqfhirvryqsxczahxmfqhdmcaitwzudgeqqehfwcyzdxihxzzfijxkoraffnagiohnsoztmdftjrphoudeoicgufvsqjdiemcghoeurdqgakkynzjmwbzhkgvufmknhhdzcfmpyztzvnjfyyxcdkydhmibmakzxkncynekgeioyamazwjoyhhatpfzgahnstvpljifjvixvfjkbbuvgbbqoubefgwcmqfxmmitahrryolbtuovawepnmzkupqpgoncfhnsgcvlyymxwoipofwhyeipjjboyrywzxupohnigweagogvv");
echo "<br>".$solution->longestPalindrome("ac");
echo "<br>".$solution->longestPalindrome("babad");
// echo "<br>".$solution->longestPalindrome('abb');

?>

<script type="text/javascript">
   /**
 // * @param {string} s
 // * @return {string}
 // */
   var longestPalindrome = function(s) {
       let currentLongest = [0, 1];

       for (let i=1; i< s.length; i++){
           const odd = expandAroundCenter(s, i-1, i+1); 
           const even = expandAroundCenter(s, i-1, i); 
           const longest = odd[1] - odd[0] > even[1] - even[0] ? odd : even; 
           currentLongest = currentLongest[1] - currentLongest[0] > longest [1] - longest[0] ?  currentLongest : longest
       } 
       return s.slice(currentLongest[0], currentLongest[1]);
   };

   function expandAroundCenter(s, leftIdx, rightIdx){
       while (leftIdx >= 0 && rightIdx < s.length){
           if(s[leftIdx] !== s[rightIdx]) break;
           leftIdx--;
           rightIdx++;
       }
       return[leftIdx + 1, rightIdx] 
   }
</script>

