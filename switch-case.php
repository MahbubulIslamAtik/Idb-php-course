<?php
  //$score=88;
//   if($score>=90 && $score<=100){
//     echo "A+";
//   }elseif($score>=80 && $score<90){
//     echo "A"
//   }elseif($score>=70 && $score<80){
//     echo "A-"
//   }elseif($score>=60 && $score<70){
//     echo "B+"
//   }elseif($score>=50 && $score<60){
//     echo "C+"
//   }elseif($score>=40 && $score<50){
//     echo "C"
//   }elseif($score>=33 && $score<40){
//     echo "D"
//   }else{
//     echo "You are Fail"
//   }
// 

$menu=3;
switch($menu){
  case 1:
    echo "Send money";
  break;
  case 2:
    echo "Mobile Recharge";
  break;
  case 3:
    echo "Cash Out";
  break;
  default:
  echo "Option is not matched";
  break;
}

?>