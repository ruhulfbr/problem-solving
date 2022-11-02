//15. 3Sum

/**
 * @param {number[]} nums
 * @return {number[][]}
 */
var threeSum = function(array) {
     array.sort((a,b) => a - b);
    const triplets = [];

    for(let i=0; i < array.length - 2; i++){
        if(array[i] != array[i-1]){
            let left = i + 1;
          let right = array.length - 1;

            while (left < right){
                const currentSum = array[i] + array[left] + array[right];
                if (currentSum === 0){
                    triplets.push([array[i], array[left], array[right]]);
                    while(array[left] == array[left + 1]) left ++
                    while(array[right] == array[right - 1]) right -- 
                    left ++;
                    right --;
                } else if(currentSum < 0) {
                    left ++
                } else if(currentSum > 0){
                    right --
                }
            }
        }
    }
    return triplets
};

console.log(threeSum([-1,0,1,2,-1,-4]));
console.log(threeSum([0,1,1]));
console.log(threeSum([0,0,0]));