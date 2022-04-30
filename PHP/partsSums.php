<?php
// Sums of Parts
// 6 kyu
// https://www.codewars.com/kata/5ce399e0047a45001c853c2b

function partsSums($ls) {
  $sum = 0;
  $arr[] = 0;
  $len = count($ls);
    for ($j = $len-1 ; $j >=0  ; $j--){
      $sum += $ls[$j];
      $arr[] = $sum;         
    }
  $arr = array_reverse($arr);
  return $arr;
}
