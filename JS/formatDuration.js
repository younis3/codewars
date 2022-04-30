// Human readable duration format
// 4 kyu
// https://www.codewars.com/kata/52742f58faf5485cae000b9a

function formatDuration (seconds) {
  if(seconds == 0){return 'now';}
  
  let arr = [];
  let sec = seconds%60;
  if (sec == 1){
    arr.push("1 second");
  }
  else if (sec > 1 && sec <60){
    arr.push(`${sec} seconds`);
  }  

  let min = Math.floor(seconds/60)%60; 
  if (min == 1){
    arr.push("1 minute");
  }
  else if (min > 1 && min <60){
    arr.push(`${min} minutes`);
  }
  
  let hour = Math.floor(seconds/60/60)%24;
  if (hour == 1){
    arr.push("1 hour");
  }
  else if (hour > 1 && hour <24){
    arr.push(`${hour} hours`);
  }  
  
  let day = Math.floor(seconds/60/60/24)%365;
  if (day == 1){
    arr.push("1 day");
  }
  else if (day > 1 && day <365){
    arr.push(`${day} days`);
  }    
  
  let yr = Math.floor(seconds/60/60/24/365);
  if (yr == 1){
    arr.push("1 year");
  }
  else if(yr > 1){
    arr.push(`${yr} years`);
  }   
  
  
  if(arr.length == 1){
    return arr[0];
  }
  else if(arr.length == 2){
    return `${arr[1]} and ${arr[0]}`;
  }
  else{
    let str="";
    for(let i=arr.length-1;i>=0; i--){
      if (i==1){
        str += `${arr[1]} and ${arr[0]}`;
        break;
      }
      else{
        str += `${arr[i]}, `;
      }
    }   
    return str;
  }
}