// Summing a number's digits
// 7 kyu
// https://www.codewars.com/kata/52f3149496de55aded000410

function sumDigits(number) {
  let n = Math.abs(number);
  let sum = 0;
  while (n>0){
    sum += (n%10);
    n = Math.floor(n/10);
  }
  return sum;
}