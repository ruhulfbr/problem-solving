/**
 * @param {string[]} strs
 * @return {string}
 */
var longestCommonPrefix = function(array) {
    let prefix = "";
    let s_string; 
    let new_prefix;

    for (i=0; i < array.length; i++){
        
        s_string = array[i];
        if( i == 0 ){
            prefix = s_string;
        }
        else{
            new_prefix = '';
              for(k=0; k< s_string.length; k++){
                  if(s_string[k] == prefix[k]){
                      new_prefix += s_string[k]
                  }
                  else{
                      break;
                  }
              }
              
              prefix = new_prefix
              if(new_prefix == ''){
                  break;
              }
        }
    }

    return prefix; 
};

console.log(getPrefix(["flower","flow","flight"]));
console.log(getPrefix(["dog","racecar","car"]));