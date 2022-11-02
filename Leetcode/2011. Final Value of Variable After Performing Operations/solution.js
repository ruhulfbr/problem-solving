/**
 * @param {string[]} operations
 * @return {number}
 */
var finalValueAfterOperations = function(operations) {
    let p=0;
        for(var i=0;i<operations.length;i++)
        {
            if(operations[i].includes("++"))
                p++;
            else if(operations[i].includes("--"))
                p--;
            else
                continue;
        }
        return p;
};