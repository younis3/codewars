// Plenty of Fish in the Pond
// 6 kyu
// https://www.codewars.com/kata/5904be220881cb68be00007d

function fish(shoal){ 
  let curSize = 1; 
  let arr_fish = shoal.split("");
  arr_fish.sort();
  let total_eat = 0;
  //console.log(arr_fish);
 
  for (let i=0; i<arr_fish.length;i++){
    if (curSize >= parseInt(arr_fish[i])){
      total_eat += parseInt(arr_fish[i]);
    }
    let calc = (total_eat/(curSize*4))*2;
    //console.log(`calc: ${calc}`);
    if (calc >= curSize + 1){
      curSize = Math.floor(calc);
    }
    //console.log(`size: ${curSize}`);
  }
  return curSize;
}