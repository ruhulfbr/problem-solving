var commonChars = function (A) {
  let first = A[0].split("").sort();
  let sol = [];
  if (A.length === 1) return first;
  for (let ch of first) {
    let flag = true;
    for (let i = 1; i < A.length; i++) {
      let index = A[i].indexOf(ch);
      if (index === -1) {
        flag = false;
        break;
      } else {
        A[i] = A[i].substr(0, index) + A[i].substr(index + 1);
        console.log(A[i]);
      }
    }
    if (flag) {
      sol.push(ch);
    }
  }
  return sol;
};