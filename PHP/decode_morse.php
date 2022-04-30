// Decode the Morse code
// 6 kyu
// https://www.codewars.com/kata/54b724efac3d5402db00065e

function decode_morse(string $code): string {
  
   $arr = array(" " => "/ ", "   " => " ", "a" => ".-", "b" => "-...", "c" => "-.-.", "d" => "-.."
                 , "e" => ".", "f" => "..-.", "g" => "--.", "h" => "....", "i" => "..",
                 "j" => ".---", "k" => "-.-", "l" => ".-..", "m" => "--", "n" => "-.",
                 "o" => "---", "p" => ".--.", "q" => "--.-", "r" => ".-.", "s" => "...",
                 "t" => "-", "u" => "..-", "v" => "...-", "w" => ".--",
                 "x" => "-..-", "y" => "-.--", "z" => "--..", "." => ".-.-.-", "!" => "-.-.--",
                "'" => ".----.", "SOS" => "...---...");
  
    $arr_word = explode("   ", $code);
    foreach ($arr_word as $word){
      $arr_char = explode(" ", $word);
      foreach ($arr_char as $char){
        $get_char = array_search($char, $arr);
        $str_word = $str_word . $get_char;
      }
      $full_str = $full_str . " ". $str_word;
      $str_word = "";
    }
    return strtoupper(trim($full_str));
}