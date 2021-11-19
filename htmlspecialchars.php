<?php
  $hello = "<h5>Hello</h5>";
  echo $hello;

   $hello =htmlspecialchars($hello);

   echo $hello;
   echo "<br/>";

  $hello=htmlentities($hello);
  echo $hello;
?>