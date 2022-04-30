// Tic-Tac-Toe Checker
// 5 kyu
// https://www.codewars.com/kata/525caa5c1bf619d28c000335


function isSolved(board) {
  let ans = 0;
  for (let i=0; i<3; i++){
    if(board[i][0] == board[i][1] && board[i][1] == board[i][2]){
      ans = board[i][0];
      if(ans!=0){return ans;}
    }
    if(board[0][i] == board[1][i] && board[1][i] == board[2][i]){
      ans = board[0][i];
      if(ans!=0){return ans;}
    }
  }
  if(board[0][0] == board[1][1] && board[1][1] == board[2][2]){
    ans = board[0][0];
    if(ans!=0){return ans;}
  }  
  if(board[0][2] == board[1][1] && board[1][1] == board[2][0]){
    ans = board[0][2];
    if(ans!=0){return ans;}
  }
  for(let i=0;i<3;i++){
    for(let j=0;j<3;j++){
      if(board[i][j]==0){
        return -1;
      }
    }
  }
  return ans; 
}