<?php
    require_once("library-practice.php");

    if(isset($_POST["btnSave"])){
        $title=$_POST["txtName"];
        $isbn=$_POST["txtISBN"];
        $author=$_POST["txtAuthor"];
        $price=$_POST["txtPrice"];

        $book=new Book($title,$isbn,$author,$price);
        $book->save();
    }

    if(isset($_POST["btnDelete"])){
        $isbn=$_POST["txtISBN"];
        Book::delete($isbn);
    }

    if(isset($_POST["btnUpdate"])){
        $title=$_POST["txtName"];
        $isbn=$_POST["txtISBN"];
        $author=$_POST["txtAuthor"];
        $price=$_POST["txtPrice"];

        $book=new Book($title,$isbn,$author,$price);
        Book::update($book);

        unset($_POST);
        $title="";
        $isbn="";
        $author="";
        $price="";
    }

    if(isset($_POST["btnEdit"])){
        $isbn=$_POST["txtISBN"];

        $book_obj=Book::get_book($isbn);
        $title=$book_obj->get_title();
        $isbn=$book_obj->get_isbn();
        $author=$book_obj->get_author();
        $price=$book_obj->get_price();
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
        table{
            background: gray;
            color: #ffffff;
            margin-top: 20px;
        }
        table,th,tr,td{
            border:1px solid #000;
            border-collapse: collapse;
            box-sizing:border-box;
            padding:5px;
        }
    </style>
</head>
<body>
    <form action="#" method='post'>
        <div> Name: <br>
            <input type="text" name="txtName" value="<?php echo isset($title)?$title:""?>"/>
        </div>
        <div> ISBN: <br>
            <input type="text" name="txtISBN" value="<?php echo isset($isbn)?$isbn:""?>"/>
        </div>
        <div> Author: <br>
            <input type="text" name="txtAuthor" value="<?php echo isset($author)?$author:""?>"/>
        </div>

        <div> Price: <br>
            <input type="text" name="txtPrice" value="<?php echo isset($price)?$price:""?>"/>
        </div>
        <div>
            <?php
                if(isset($_POST["btnEdit"])){
            ?>
            <input type="submit" name="btnUpdate" value="Update"/>

            <?php }else { ?>
                    <input type="submit" name="btnSave" value="Create"/>
            <?php } ?>
        </div>
    </form>

    <?php
        Book::display();
    ?>

<script>
    
</script>
</body>
</html>