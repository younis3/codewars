// Highest and Lowest
// 7 kyu
// https://www.codewars.com/kata/554b4ac871d6813a03000035

function highAndLow($numbers)
{
  $array_nums = explode(" ", $numbers);
  return max($array_nums) . " " . min($array_nums);
}