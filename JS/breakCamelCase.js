// Break camelCase
// 6 kyu
// https://www.codewars.com/kata/5208f99aee097e6552000148

function solution(string) {
  let arr = string.split('');
  let arr2 = [arr[0]];
  for (let i=1; i<arr.length; i++){
    if(string[i]==string[i].toUpperCase()){
      arr2.push(` ${(string[i])}`);
    }
    else{
      arr2.push(string[i]);
    }
  }
  return arr2.join('');
}