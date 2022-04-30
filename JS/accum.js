// Mumbling
// 7 kyu
// https://www.codewars.com/kata/5667e8f4e3f572a8f2000039

function accum(s) {
  var arr = s.split("");
  var res = [];
  for (let i = 0; i<arr.length; i++){
    res.push(arr[i].toUpperCase() + arr[i].toLowerCase().repeat(i));
  }
  return res.join("-");
}