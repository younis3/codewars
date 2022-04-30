// Count of positives / sum of negatives
// 8 kyu
// https://www.codewars.com/kata/576bb71bbbcf0951d5000044

function countPositivesSumNegatives(input) {
if (input == null) 
      return [];
  if (input != null || !input) {
    var countpositive = 0;
    var sumnegative = 0;
    var i;  
      for (i = 0; i < input.length; i++) {
        if (input[i] > 0){
          countpositive++;
        }
        if (input[i] < 0){
          sumnegative += input[i];
        }
      }
    if (countpositive == 0 && sumnegative==0){
        return [];
    }
    else{
      return [countpositive,sumnegative];
    }
  }
}