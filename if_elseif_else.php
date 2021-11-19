<?php
  $number=80;

  if($number>=80 && $number<=100){
    echo "You got A+";
  }elseif($number>=70 && $number<80){
    echo "You got A";
  }elseif($number>=60 && $number<70){
    echo "You got A-";
  }elseif($number>=50 && $number<60){
    echo "You got B";
  }elseif($number>=40 && $number<50){
    echo "You got C";
  }elseif($number>=33 && $number<40){
    echo "You got D";
  }else{
    echo "You are Fail";
  }
?>