// String incrementer
// 5 kyu
// https://www.codewars.com/kata/54a91a4883a7de5d7800009c

function incrementString (strng) {
  if (isNaN(strng[strng.length-1])){
    return strng += '1';
  }
  else{
    let str = strng[strng.length-1];
    for (let i = strng.length-2; i>=0; i--){
      if (!isNaN(strng[i])){
        str += strng[i];
      }
    }
    str = str.split("").reverse().join("");
    let idx = str.length;
    let new_num = (parseInt(str)+1).toString();
    str = str.substring(0,str.length-new_num.length);
    str += new_num;
    let first = strng.substring(0,strng.length-idx);
    return first + str;
  }
}