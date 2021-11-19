<?php
if ( isset( $_POST["textSubmit"] ) ) {
    $uId = htmlspecialchars( $_POST["textId"] );
    $uName = htmlspecialchars( $_POST["textName"] );
    $uMobile = htmlspecialchars( $_POST["textMobile"] );

     //image
    $src_name = $_FILES["textPhoto"]["tmp_name"];
    $orgi_name = $_FILES["textPhoto"]["name"];
        
    $file_type = $_FILES["textPhoto"]["type"];
    $file_size = $_FILES["textPhoto"]["size"];

    $kb = $file_size/1024;
    //$mb = $kb/1024;
    $valid_types = ["image/jpg", "image/png"];

    $csv = $uId.",".$uName.",".$uMobile.",". $orgi_name."\n";
    
if(in_array($file_type,$valid_types)){
    if ( $kb != 0 ) {
        # code...
        if ( $kb <= 90 ) {            
            # code...
            
                file_put_contents( "contact.txt", $csv, FILE_APPEND );
                move_uploaded_file( $src_name, "img/contact/".$orgi_name );            
                         
        } else {
           # code...
            echo "File size exceed";
        }

    } else {
        # code...
        echo "Invalid Format";
    }
}else{ echo "Only JPG or PNG Only Allowed";  }

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
        border: 1px solid lightgray;

    }

    td {
        padding: 5px;
        display: table-cell;
        vertical-align: inherit;
    }

    .img {
        height: 60px;
        width: 60px;
    }
    </style>
</head>

<body>
    <div>
        <h1>This php form</h1>
    </div>
    <div>
        <form action="?" method="post" enctype="multipart/form-data">
            <div>
                <label for="uId">ID:</label><br>
                <input type="text" name="textId" value="" id="uId" required>
            </div><br>
            <div>
                <label for="uname">Name:</label><br>
                <input type="text" name="textName" value="" id="uname" required>
            </div><br>

            <div>
                <label for="umbl">Mobile:</label><br>
                <input type="text" name="textMobile" value="" id="umbl">
            </div><br>
            <div>
                <label for="uimg">Photo:</label><br>
                <input type="file" name="textPhoto" value="" id="uimg">
            </div><br>
            <div>

                <input type="submit" name="textSubmit" value="Submit">
            </div>
        </form>
    </div>

    <?php
$users = file("contact.txt");

echo "<table>";
echo "<tr><th>Sn</th><th>ID</th><th>Name</th><th>Mobile</th><th>Photo</th></tr>";

$i = 1;
foreach ( $users as $value ) {

    list( $id, $name, $mobile, $photo ) = explode( ",", $value );

    echo "<tr><td>$i</td><td>$id</td><td>$name</td><td>$mobile</td><td><img class='img' src='img/contact/$photo'></td></tr>";
    $i++;

}

echo "</table>";
?>
</body>

</html>