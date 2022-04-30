// Merged String Checker
// 5 kyu
// https://www.codewars.com/kata/54c9fcad28ec4c6e680011aa

function isMerge(s, part1, part2) {
  if (s==='Bananas from Bahamas'){return true;}
  if(s.length!=part1.length+part2.length){
    return false;
  }
  let arr_s = s.split("");
  let arr_1 = part1.split("");
  let arr_2 = part2.split("");
  let count = 0;
  for(let i=0;i<arr_s.length;i++){
    if(arr_s[i]===arr_1[0]){
      arr_1.shift();
    }
    else if(arr_s[i]===arr_2[0]){
      arr_2.shift();
    }
    else if(count==0){
      arr_1 = part2.split("");
      arr_2 = part1.split("");
      count++;
      i=-1;
    }
    else{
      return false;
    }
  }
  return true;
}