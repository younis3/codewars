// CamelCase Method
// 6 kyu
// https://www.codewars.com/kata/587731fda577b3d1b0001196

function camel_case(string $s): string {
  $s = ucwords($s);
  $arr = explode(" ", $s);
  $s = implode($arr);
  return $s;
}