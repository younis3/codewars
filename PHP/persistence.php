// Persistent Bugger
// 6 kyu
// https://www.codewars.com/kata/55bf01e5a717a0d57e0000ec

function persistence(int $num): int {
  $counter = 0;
  $multi = 1;
  if (strlen($num) == 1){
    return 0;
  }
  else{
    while (strlen($num) > 1){
    $digit = $num % 10;
    $multi = $digit * $multi;
    $num = (int)($num /10);
    if (strlen($num) == 1){
      $digit = $num % 10;
      $multi = $digit * $multi;
      $num = $multi;
      $multi = 1;
      $counter++;
      }
    }
    return $counter;
  }
}