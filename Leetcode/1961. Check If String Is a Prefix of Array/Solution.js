/**
 * @param {string} s
 * @param {string[]} words
 * @return {boolean}
 */
var isPrefixString = function(s, words) {
    let ans = "";
 
      let N = words.length;
      for (let i = 0; i < N; i++)
      {
          ans += words[i];
          if (ans == s)
              return true;
      }

      return false;
};