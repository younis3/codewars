<?php
// Find the odd int
// 6 kyu
// https://www.codewars.com/kata/54da5a58ea159efa38000836

function findIt(array $seq) : int
{
    $arr = array_count_values($seq);
    foreach($arr as $n){
      if ($n % 2 != 0){
        return array_search($n, $arr);
      }
    }
}
