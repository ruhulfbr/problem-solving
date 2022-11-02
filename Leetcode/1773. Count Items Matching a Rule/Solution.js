//1773. Count Items Matching a Rule

/**
 * @param {string[][]} items
 * @param {string} ruleKey
 * @param {string} ruleValue
 * @return {number}
 */
var countMatches = function(items, ruleKey, ruleValue) {
     let res = 0;
    for(let i of items){
      if(ruleKey=="color" && i[1]==ruleValue){
        res++
      }else if(ruleKey=="type" && i[0]==ruleValue){
        res++
      }else if(ruleKey=="name" && i[2]==ruleValue){
        res++
      }
    }
    return res;
};