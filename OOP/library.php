
<?php
    require_once("Final_book_class.php");

    if(isset($_POST["btnSave"])){
        $name=$_POST["txtName"];
        $isbn=$_POST["txtISBN"];
        $author=$_POST["txtAuthor"];
        $price=$_POST["txtPrice"];

        $book=new Book($name,$isbn,$author,$price);
        $book->save();
    }

    if(isset($_POST["btnDelete"])){
        $isbn=$_POST["txtISBN"];
        Book::delete($isbn);
    }

    if(isset($_POST["btnEdit"])){
        $isbn=$_POST["txtISBN"];
        
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="#" method="post">
        <div>Name<br>
            <input type="text" name="txtName" />
        </div>
        <div>ISBN<br>
            <input type="text" name="txtISBN" />
        </div>
        <div>Author<br>
            <input type="text" name="txtAuthor" />
        </div>
        <div>Price<br>
            <input type="text" name="txtPrice" />
        </div>

        <div><br>
            <input type="submit" name="btnSave" value="Save" />
        </div>
    </form>

    <?php
        Book::display_all();
    ?>
</body>
</html>