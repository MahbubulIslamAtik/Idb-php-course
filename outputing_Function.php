<?php

  $name = "Jahid";
  $age = 24;
  echo "Hello World","and Bangladesh","Bangladesh is a beautiful country<br/>","Name:",$name,"Age:",$age,"!";

  print("Hello World"." and Bangladesh". "");// Print and echo number, boolean, string data 


  printf("<br/> Hello World");
  
  $s = sprintf("<br/>Name:%s, Age:%d", $name, $age);
  echo "<br/>".$s." | another text <br/>";

  $a = ["Hello", "32",true,["a","b","c"]];
  print_r($a); //print all types of variable;
  echo "<br/>";

  echo "<pre>";

   var_dump($a);// print all types of variable 

  echo "</pre>";

  $html="";
  $html.= "<form action='#' method='post'";

  $html.="<div>";
    $html.="First Name:<br/>";
    $html.="<input type='text' name='txtName' />";
  $html.="<div/>";

   $html.="<div>";
    $html.="Last Name:<br/>";
    $html.="<input type='text' name='txtName' />";
  $html.="<div/>";

   $html.="<div>";
    $html.="Email:<br/>";
    $html.="<input type='text' name='txtEmail' />";
  $html.="<div/>";

  $html.="<div>";
    $html.="Gender:<br/>";
    $html.="Male <input type='radio' name='rdoGender' />";
    $html.="Female <input type='radio' name='rdoGender' />";
  $html.="<div/>";

  $html.="<div>";
    $html.="Subject:<br/>";
    $html.="Bangla <input type='checkbox' name='chkSubject' />";
    $html.= "English <input type='checkbox' name='chkSubject' />";
    $html.= "Physics <input type='checkbox' name='chkSubject' />";
  $html.="<div/>";

  


  $html.="<div>";
    $html.="<br/>";
    $html.="<input type='submit' name='submit' value='Submit' />";
  $html.="<div/>";

  $html.="</form>";

  echo $html;
?>