// Reverse words
// 7 kyu
// https://www.codewars.com/kata/5259b20d6021e9e14c0010d4

function reverseWords(str) {
  var res = str.split(" ");
  var txt = "";
  for(let i=0; i<res.length; i++){
     var reversed_word = res[i].split("");
     if (i == res.length - 1){
       txt += reversed_word.reverse().join("");
     }
     else{
      txt += reversed_word.reverse().join("") + " ";
     }
    }
  return txt;
}