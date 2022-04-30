// Replace With Alphabet Position
// 6 kyu
// https://www.codewars.com/kata/546f922b54af40e1e90001da

function alphabet_position(string $s): string {
$s = strtoupper($s);
 $alphabet = range('A', 'Z');
  for ($i=0; $i<strlen($s); $i++){
      if (in_array($s[$i], $alphabet)){
          $pos = $pos . ((array_search($s[$i], $alphabet) + 1) . " ");
      }
    }
  return rtrim($pos);
}