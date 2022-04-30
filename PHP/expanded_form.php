// Write Number in Expanded Form
// 6 kyu
// https://www.codewars.com/kata/5842df8ccbd22792a4000245

function expanded_form(int $n): string {
  $multi = 1;
  $arr = array();
  $array = str_split($n);
  $array = array_reverse($array);
  
  for ($i = 0; $i<count($array); $i++){
    $x = ($array[$i]) * $multi;
    echo " X ". $x;
    if ($x != 0) {$arr [] = $x;}
    $multi = $multi * 10;
  }
  
  $str = "";
  for ($i= count($arr); $i> 0; $i--){
    if($i-1 == 0){ 
      $str = $str .$arr[$i-1];
    }
    else{
      $str = $str .$arr[$i-1] . " + ";
    }
  }
  return $str;
}