// Find the middle element
// 7 kyu
// https://www.codewars.com/kata/545a4c5a61aa4c6916000755

var gimme = function (inputArray) {
  let max = Math.max(...inputArray);
  let min = Math.min(...inputArray);
  for (let i in inputArray){
    if(inputArray[i] < max && inputArray[i] > min){
      return parseInt(i);
    }
  }
};