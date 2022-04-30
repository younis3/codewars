<?php
// Points in the circle
// 6 kyu
// https://www.codewars.com/kata/5b55c49d4a317adff500015f

function pointsNumber($radius){
  $x1 = $y1 = 0;
  $counter = 0;
  for ($x2=1; $x2<= $radius - 1; $x2++){
    for ($y2=1; $y2<= $radius - 1; $y2++){
      if (distance($x1,$y1,$x2,$y2) <= $radius){
        $counter++;
      }
    }
  }
  return ($counter * 4 + $radius * 4 + 1);
}

function distance($x1,$y1,$x2, $y2){
    return pow(($x2-$x1)*($x2-$x1) + ($y2-$y1)*($y2-$y1), 1/2);
}
