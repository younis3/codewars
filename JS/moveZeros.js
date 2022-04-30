// Moving Zeros To The End
// 5 kyu
// https://www.codewars.com/kata/52597aa56021e91c93000cb0

var moveZeros = function (arr) {
  let count = 0;
  while(count<arr.length){
    for(let i=0;i<arr.length;i++){
        if(arr[i]===0){
          arr.splice(i,1);
          arr.push(0);
          count++;
          break;
        }
    }
  }
  return arr;
}