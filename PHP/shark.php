// Holiday VI - Shark Pontoon
// 8 kyu
// https://www.codewars.com/kata/57e921d8b36340f1fd000059

function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string {
  if ($dolphin){
    $sharkSpeed = $sharkSpeed/2;
  }
  $time_shark = $sharkDistance/$sharkSpeed;
  $time_you = $pontoonDistance/$youSpeed;
  if ($time_you < $time_shark){
    return 'Alive!';
  }
  else{
    return 'Shark Bait!';
  }
}