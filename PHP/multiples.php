// Multiples of 3 or 5
// 6 kyu
// https://www.codewars.com/kata/514b92a657cdc65150000006

function solution($number){
  if($number < 0){return 0;} 
  for ($i= 1; $i< $number; $i++){ 
    if (($i % 3 == 0) || ($i % 5 == 0)){
      $sum += $i;
    }
  }
  return $sum;
}