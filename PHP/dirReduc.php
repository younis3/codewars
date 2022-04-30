// Directions Reduction
// 5 kyu
// https://www.codewars.com/kata/550f22f4d758534c1100025a

function dirReduc($arr) {
 
  $pos = ["" => -999, "EAST" => 1,
  "NORTH" => 2,
  "WEST" => 3, 
  "SOUTH" => 4];
  
  $exit = false;
  $counter = 0;
  while ($exit == false){
    $arr = $arr;

    for($i = 1; $i<= count($arr); $i++){
        $len = count($arr);
        if ($exit == true){break;}

        if(count($arr) < 2){
          $exit = true;
          break;
        }
        $prev = $pos[$arr[$i-1]];
        $cur = $pos[$arr[$i]];


        if (abs($cur - $prev) == 2){
        //remove
          print_r($arr);
            
          unset($arr[$i-1]);
          unset($arr[$i]);
          $arr = array_values($arr);
          if(empty($arr)){
            $exit=true;
            break;
          }
          print_r($arr);
          break;
          }

          elseif ($i == $len){
            $exit = true;
          }   
      }
      $counter++;
  }
 return($arr);  
}