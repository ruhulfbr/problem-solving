/**
 * @param {string} s
 * @return {boolean}
 */
var isValid = function (string) {
    let parenthesis = [];
    for (let index = 0; index < string.length; index++) {
        if (string[index] == '{') {
            parenthesis.push('}');
        } else if (string[index] == '[') {
            parenthesis.push(']');
        } else if (string[index] == '(') {
            parenthesis.push(')');
        }
        else if (parenthesis.pop() !== string[index]) {
            return false;
        }
    }
    return !parenthesis.length;
};

console.log(isValid("{{}[][[[]]]}"));