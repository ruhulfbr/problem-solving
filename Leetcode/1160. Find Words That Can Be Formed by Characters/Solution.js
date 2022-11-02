//1160. Find Words That Can Be Formed by Characters

/**
 * @param {string[]} words
 * @param {string} chars
 * @return {number}
 */
var countCharacters = function(words, chars) {
    let myMap= new Map();
    for(let i = 0; i< chars.length; i++){
      if(myMap.has(chars[i])){
        myMap.set(chars[i], myMap.get(chars[i]) + 1)
      }else{
        myMap.set(chars[i], 1)
      }
    }

    let totalCount = 0

    words.map(word => {

      let allPass = true
      let wordMap = new Map();
      for (let i = 0; i < word.length; i++) {
        if(myMap.has(word[i])){
          
          let count = !wordMap.get(word[i]) ? 1 : wordMap.get(word[i]) + 1;
          wordMap.set(word[i], count)
        }else{
          allPass = false  
          break;
        }
      }
      let lengthPass = true;
      
      if(allPass){
        let countLen = 0
        wordMap.forEach((value, index) => {
            countLen += value;
            if(value > myMap.get(index)){
                lengthPass = false
            }   
        })

        if( lengthPass){
            totalCount += countLen;
        }
      }
     
    })
    return totalCount;
};