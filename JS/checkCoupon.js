// The Coupon Code
// 7 kyu
// https://www.codewars.com/kata/539de388a540db7fec000642

function checkCoupon(enteredCode, correctCode, currentDate, expirationDate){ 
  if(enteredCode===correctCode){
      let cur = new Date(currentDate);
      let exp = new Date(expirationDate);
      return(cur<= exp);
  }
  else{
      return false;
  }
}