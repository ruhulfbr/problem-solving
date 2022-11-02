//1598. Crawler Log Folder

var minOperations = function(logs) {
    let curIdx = 0;

    for(let i = 0; i < logs.length; i++) {
      if(logs[i] === "../") {
          curIdx <= 0 ? curIdx : curIdx -= 1;
      } else if(logs[i] === "./") {
          curIdx;
      } else if(logs[i] === "x/") {
          curIdx += 1;
      } else {
          curIdx += 1;
      } 
    }
    
    return curIdx;
};