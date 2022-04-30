// Next bigger number with the same digits
// 4 kyu
// https://www.codewars.com/kata/55983863da40caa2c900004e

function nextBigger($n) {
  $arr = (str_split($n)); 
  if (count($arr) == 1){return -1;} 

  for ($i=count($arr)-1; $i>=0;$i--){
    if ($arr[$i]<$arr[$i+1]){
      $index = $i;
      break;
    }
    elseif($i == 0){
      return-1;
    }
  }
  

  for ($i=count($arr)-1; $i>$index ;$i--){
    if ($arr[$i] > $arr[$index]){
      $smallest_greater[$i] = $arr[$i]; 
    }  
  }

  $index_smallest_greatest =  array_search(min($smallest_greater),$smallest_greater);
  $temp = $arr[$index];
  $arr[$index] = $arr[$index_smallest_greatest];
  $arr[$index_smallest_greatest] = $temp;
  
  //4 sort 
  $sub = array_slice($arr, 0, $index+1);
  $sub2 = array_slice($arr, $index+1, count($arr)-1);

  $sub2_sorted = $sub2;  
  $sub2_sorted_final = $sub2_sorted;
  asort($sub2_sorted_final);
  
  (implode(array_reverse($arr)));
  $final_res = intval(implode($sub) . implode($sub2_sorted_final));
  return $final_res;
}