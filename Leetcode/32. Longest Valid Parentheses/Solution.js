//32. Longest Valid Parentheses

/**
 * @param {string} s
 * @return {number}
 */
var longestValidParentheses = function (s) {
    let count = 0;
    let left = 0;
    let right = 0;
    for (let i = 0; i < s.length; i++) {
        let c = s[i];
        if (c === '(') {
            left++;
        }
        if (c === ')') {
            right++;
        }
        if (left === right) {
            count = Math.max(count, left + right);
        }
        if (right > left) {
            left = right = 0;
        }
    }
    left = right = 0;
    for (let i = s.length - 1; i >= 0; i--) {
        let c = s[i];
        if (c === '(') {
            left++;
        }
        if (c === ')') {
            right++;
        }
        if (left === right) {
            count = Math.max(count, left + right);
        }
        if (left > right) {
            left = right = 0;
        }
    }
    return count;
};