// Growth of a Population
// 7 kyu
// https://www.codewars.com/kata/563b662a59afc2b5120000c6

function nbYear($p0, $percent, $aug, $p) {
  while ($p0 < $p){
    $p0 = $p0 + ($p0 * $percent/100) + $aug;
    $counter++;
  }
  return $counter;
}