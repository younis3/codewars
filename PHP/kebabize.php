// Kebabize
// 6 kyu
// https://www.codewars.com/kata/57f8ff867a28db569e000c4a

function kebabize($string) {
  $numbers_removed = preg_replace('/[0-9]+/', '', $string);
  $arr = preg_split('/(?=[A-Z])/',$numbers_removed);
  $s = implode($arr, "-");
  return ltrim(strtolower($s), '-');
}