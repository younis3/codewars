<?php
// Detect Pangram
// 6 kyu
// https://www.codewars.com/kata/545cedaa9943f7fe7b000048

function detect_pangram($string) { 
    $string = strtoupper($string);
    $alphabet = range('A', 'Z');
    foreach ($alphabet as $char) {
      echo $char;
      if (strpos($string, $char) === false){
        return false;
      }
    } 
    return true;
}
