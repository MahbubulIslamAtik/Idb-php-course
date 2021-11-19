<?php

 //***********1. Numirical Array***********//
  $arr=["Jahid","Rasel","Shajib"];
   //alternate
  $arr1[0]="Jahid";
  $arr1[1]="Rasel";
  $arr1[2]="Shajib";

  echo $arr1[1];//Rasel
   //alternate
  $arr2=array("Jahid","Rasel","Shajib");
  foreach($arr as $a){
     echo $a."<br?";
  }

  //*******2. Associative Array***************//

  $arr3=array("jahid"=>"Jahidul Islam",
              "shahad"=>"Md. Shahadul Islam",
               "rasel"=>"Md. Rasel");

     
   foreach($arr3 as $name=>$full_name){
          echo $name."=".$full_name."<br>";
    }          

   foreach($arr3 as $full_name){
        echo $full_name."<br>";
   }          

         //alternate
    $arr4["jahid"]="Jahidul Islam";
    $arr4["shahad"]="Md. Shahadul Islam";
    $arr4["rasel"]="Md. Rasel";

    echo $arr4["rasel"];//Md. Rasel

 
?>