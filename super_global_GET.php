<?php
  if(isset($_GET["item"])){
    echo $_GET["item"];
  }else{
    echo "Data Not found";
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
  <a href="?item=10">Item number 10</a>
  <a href="?item=11">Item number 11</a>
</body>
</html>