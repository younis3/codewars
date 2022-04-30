// Abbreviate a Two Word Name
// 8 kyu
// https://www.codewars.com/kata/57eadb7ecd143f4c9c0000a3

function abbrevName(name){
  var arr = name.split(" ");
  return `${arr[0].substring(0,1).toUpperCase()}.${arr[1].substring(0,1).toUpperCase()}`;
}