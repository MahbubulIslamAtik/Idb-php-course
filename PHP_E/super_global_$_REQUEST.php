<?php
  if(isset($_REQUEST["txtName"])){   
    echo $_REQUEST["txtName"];
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
<form action="?" method="get">
        Name: <input type="text" name="txtName" />
        <input type="submit" value="Submit" />
    </form>   
</body> 
</html>