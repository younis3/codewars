// Find The Parity Outlier
// 6 kyu
// https://www.codewars.com/kata/5526fc09a1bbd946250002dc

function find($integers){
   $counter_odd = 0;
   for($i=0; $i<3; $i++){
      $n = $integers[$i];
      if (($n % 2) != 0){
          $counter_odd++;
      }
      if ($counter_odd > 1) {$array_odd = true;}
    }
    for($i=0; $i<count($integers); $i++){
      $n = $integers[$i];
      if (($n % 2) == 0 && ($array_odd == true)){
          return $n;
      }
      elseif (($n % 2) != 0 && ($array_odd != true)){
          return $n;
      }
    }
}