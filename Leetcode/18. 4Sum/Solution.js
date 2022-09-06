/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[][]}
 */
var fourSum = function(array, target) {
     array.sort((a,b) => a - b);
    const quadruplets = [];
    const quadrupletsString = [];
    let string = '';

    for(let i=0; i < array.length - 2; i++){
        if(array[i] !== array[i-1]){
            for(let j=i+1; j < array.length - 2; j++){
                if(array[j] !== array[j-2]){
                    let left = j + 1;
                    let right = array.length - 1;
                
                    while (left < right){
                        const currentSum = array[i] + array[j] + array[left] + array[right];
                        if (currentSum === target){
                            
                            string = array[i].toString()+array[j].toString()+array[left].toString()+array[right].toString();
                            
                            if( !quadrupletsString.includes(string) ){
                                quadrupletsString.push(string);
                                quadruplets.push([array[i], array[j], array[left], array[right]]);
                            }

                            while(array[left] == array[left + 1]) left ++
                            while(array[right] == array[right - 1]) right -- 
                            left ++;
                            right --;
                        } else if(currentSum < target) {
                            left ++
                        } else if(currentSum > target){
                            right --
                        }
                    }
                }
            }
        }
    }
    
    return quadruplets
};