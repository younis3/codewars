// Find the divisors
// 7 kyu
// https://www.codewars.com/kata/544aed4c4a30184e960010f4

function divisors($integer) {
  $counter = 2;
  $array1 = array();
  while ($counter >1 && $counter < $integer){
    if ($integer % $counter == 0){
      array_push($array1,$counter);
    }
    $counter ++;
  }
  if (empty($array1)){
    return $integer . " is prime";
  }
  else{
    return $array1;
  }
}