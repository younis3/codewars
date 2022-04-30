// Simple Pig Latin
// 5 kyu
// https://www.codewars.com/kata/520b9d2ad5c005041100000f

function pigIt(str){
  let arr = str.split(" ");  
  for(let i in arr){
    let wr = arr[i].split("");
    let letter = wr[0];
    if (letter.toUpperCase() != letter.toLowerCase()){
          wr.splice(0,1);
          wr.push(`${letter}ay`);
          arr[i] = wr.join("");
    } 
  }
  return arr.join(" ");
}