<?php
if (isset($_POST['btnSubmit'])) {
  $name =htmlspecialchars($_POST['txtName']);
  $contact =htmlspecialchars($_POST['txtContact']);

  $src_name = $_FILES["file"]["tmp_name"];
  $orig_name = $_FILES["file"]["name"];

  $file_type = $_FILES["file"]["type"];
  $file_size = $_FILES["file"]["size"];

  $kb = $file_size/1024;
  $mb = $kb/1024;

  $valid_types = ["image/jpeg", "image/png"];
  $errors=[];

  $csv = $name . "," . $contact .",". $orig_name."\n";

  //file_put_contents("contacts.txt", $csv, FILE_APPEND);

  //copy($src_name, "img/contact/". $orig_name);

  if($kb!=0){
    if($kb<=90){
      if(in_array($file_type, $valid_types)){
        file_put_contents("contact.txt",$csv,FILE_APPEND);
        move_uploaded_file($src_name,"img/contact/".$orig_name);
      }else{
        echo "Invalid format";
      }
    }else{
      echo "File size exceed";
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,
    th,
    td {
      background-color: lightgray;
      border: 1px solid black;
      border-collapse: collapse;
    }

    td {
      padding: 10px
    }
  </style>


</head>

<body>
  <form action="?" method="post" enctype="multipart/form-data">
    <div>
      Name: <br />
      <input type="text" name="txtName" id="">
    </div>
    <div>
      Contact: <br />
      <input type="text" name="txtContact" id="">
    </div><br/>
    <div>
      <input type="file" name="file" />
    </div>
    <div> <br/>
      <input type="submit" name="btnSubmit" id="" value="Submit">
    </div>
  </form>

  <?php
  $users = file("contacts.txt");


  echo "<table>";
  echo "<tr><th>SN</th><th>Name</th><th>Mobile</th><th>Photo</th></tr>";

  $i = 1;
  foreach ($users as $user) {
    list($name,$mob,$Photo) = explode(",",$user);
    echo "<tr><td>$i</td><td>$name</td><td>$mob</td><td><img src='img/contact/$Photo' height='50'</td></tr>";
    $i++;
  }
  "</table>"
  ?>
</body>

</html>