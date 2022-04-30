// Sum of pairs
// 5 kyu
// https://www.codewars.com/kata/54d81488b981293527000c8f

function sumPairs(ints, s) {
  /*
  //First solution: O(n^2)
  let x=null;
  let y=null;
  for (let n=ints.length-1;n>=0;n--){  
    for (let i=0; i<n; i++){
       if(ints[n] + ints[i] == s){
         x = ints[i];
         y = ints[n];
         break;     
       }     
    }
  } 
  if (x!=null){
    console.log([x, y]);  
  }
  return undefined;
  //---------------------------------
  */
  
  //2nd solution optimized: O(n) 
  let intsSet = new Set();
  intsSet.add(ints[0]);
  for (let i=1; i<ints.length; i++){
    let req = s - ints[i];
    if (intsSet.has(req)){
      return[req,ints[i]];
    }
    intsSet.add(ints[i]);
  }
  return undefined;
}