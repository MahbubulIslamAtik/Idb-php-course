<?php
   
   if(isset($_GET["item"])){
     echo $_GET["item"];
   }else{
     echo "Data Not found<br>";
   }

   if(isset($_GET["name"])){
       echo "Name:".$_GET["name"];
   }

   if(isset($_GET["age"])){
    echo " Age: ".$_GET["age"]."<br>";
   }  

   if(isset($_GET["ip"])){
    echo " IP: ".$_GET["ip"]."<br>";
   } 

   if(isset($_GET["browser"])){
    echo " Browser: ".$_GET["browser"]."<br>";
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Query string: name=jahid&age=24 -->

    <a href="?item=10">Show Item 1</a>  
    <a href="?item=11">Show Item 2</a>

    <a href="?name=jahid&age=24">Info</a>

    <form action="?" method="get">
        <input type="hidden" value="Jahid" name="name" />
        <input type="hidden" value="24" name="age" />
        <input type="hidden" value="<?php echo $_SERVER["REMOTE_ADDR"]?>" name="ip" />
        <input type="hidden" value="<?php echo $_SERVER["HTTP_USER_AGENT"]?>" name="browser" />
        <input type="submit" value="Info" />
    </form>

</body>
</html>
