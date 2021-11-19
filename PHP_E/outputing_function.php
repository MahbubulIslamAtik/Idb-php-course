<style>
   input[type=text]{padding:10px}
</style>

<?php

   $name="Jahid";
   $age=24;

    echo "Hello World"," and Bangladesh"," Bangladesh is a beautiful country<br>","Name:",$name,"Age:",$age,"<br>";
    
    $r=print("Hello World"." and Bangladesh"."");    //print and echo: number,boolean, string data
    
    printf("<br>Hello World");
    printf("<br>Name:%s, Age:%d",$name,$age);// Read other type specifier from your textbook page:55

    $s=sprintf("<br>Name:%s, Age:%d",$name,$age);
    echo "<br>".$s." | another text<br>";

    $arr=["Hello",32,true,["a","b","c"]];  

    echo "<pre>";
     print_r($arr); // print all types of valiable
    echo "</pre>";
  
 
    echo "<pre>";
     var_dump($arr); # print all types of valiable
    echo "</pre>";

   
    $html="<form action='#' method='post'>";

    $html.="<div>";
     $html.="Name<br>";
     $html.="<input type='text' onblur='abc()' name='txtName' />";
    $html.="</div>";

    $html.="<div>";
     $html.="Email<br>";
     $html.="<input type='text' name='txtEmail' />";
    $html.="</div>";

    $html.="<div>";    
    $html.="<input type='submit' value='Submit' />";
   $html.="</div>";

    $html.="</form>"; 

    echo $html;

?>

<script>

   let html="<form action='#' method='post'>";

       html+="<div>";
       html+="Email<br>";
       html+="<input type='text' onblur='abc()' name='txtName' />";
       html+="</div>";

       html+="</form>";

       document.write(html);

</script>

<script> 
   function abc(){ 
       alert('Ok')       
   }
</script>

<input type="text">



