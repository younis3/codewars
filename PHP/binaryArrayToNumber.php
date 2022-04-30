// Ones and Zeros
// 7kyu
// https://www.codewars.com/kata/578553c3a1b8d5c40300037c

function binaryArrayToNumber($arr) {
  $str = implode($arr);
  return bindec($str);
}