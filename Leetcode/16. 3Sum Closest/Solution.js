/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number}
 */
const threeSumClosest = (array, target) => {
   array.sort((a,b) => a - b);
    const triplets = [];
    let closest = array[0]+array[1]+array[2];

    for(let i=0; i < array.length - 2; i++){
        if(array[i] != array[i-1]){
            let left = i + 1;
          let right = array.length - 1;

            while (left < right){
                const currentSum = array[i] + array[left] + array[right];
                if (currentSum === target){
                    return currentSum;
                } else if(currentSum < target) {
                    if((closest < currentSum && currentSum < target) || Math.abs(target-currentSum) < Math.abs(target-closest)){
                        closest = currentSum;
                    }
                    left ++
                } else if(currentSum > target){
                    if(closest > currentSum && currentSum > target ||
                       Math.abs(target-currentSum) < Math.abs(target-closest)) {
                        closest = currentSum;
                    }
                    right --
                }
            }
        }
    }
    
    return closest
};