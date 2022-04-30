// Clocky Mc Clock-Face
// 6 kyu
// https://www.codewars.com/kata/59752e1f064d1261cb0000ec

function what_time_is_it(float $angle): string {
  $hour = intval($angle*2/60);
  if($hour == 0){$hour = 12;}
  $minute = intval($angle*2 % 60);

  $hour_padded = sprintf("%02d", $hour);
  $minute_padded = sprintf("%02d", $minute);
  return $hour_padded . ":" .$minute_padded;
}