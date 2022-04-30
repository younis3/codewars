// Square Every Digit
// 7 kyu
// https://www.codewars.com/kata/546e2562b03326a88e000020

function squareDigits(num){
  let num_str = num.toString();
  let ans = "";
  for (let n of num_str){
    ans += ((parseInt(n))**2).toString();
  }
  return parseInt(ans);
}