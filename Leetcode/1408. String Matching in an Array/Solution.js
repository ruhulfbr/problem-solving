//1408. String Matching in an Array

var stringMatching = function(words) {
    let matchingArr = [];
    let min = 0;
    for (let i = 1; i < words.length; i++) {
        if (words[min].includes(words[i]) ) {
            matchingArr.push(words[i]);
            words.splice(i,1);
            i = 0;
        } else if(words[i].includes(words[min]) ) {
            matchingArr.push(words[min]);
            words.splice(min,1);
            i = 0; 
        }
        else {
             if (i === words.length-1) {
                words.splice(min,1)
                i = 0;
            }
        }
    }
    return matchingArr;
};