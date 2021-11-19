<?php

   echo "1. Send money<br>";
   echo "2. Mobile Recharge<br>";
   echo "3. Cash Out";
   echo "4. Back";

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