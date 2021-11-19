<?php
    class Book{
        private $title;
        private $isbn;
        private $author;
        private $price;

        function __construct($title,$isbn,$author,$price){
            $this->title=$title;
            $this->isbn=$isbn;
            $this->author=$author;
            $this->price=$price;
        }

        public function set_title($title){
            $this->title=$title;
        }

        public function get_title(){
            return $this->title;
        }

        public function set_isbn($isbn){
            $this->isbn=$isbn;
        }

        public function get_isbn(){
            return $this->isbn;
        }

        public function set_author($author){
            $this->author=$author;
        }

        public function get_author(){
            return $this->author;
        }
        
        public function set_price($price){
            $this->price=$price;
        }

        public function get_price(){
            return $this->price;
        }

        public function save(){
            $csv=$this->title.",".$this->isbn.",".$this->author.",".$this->price.PHP_EOL;
            $books=file("data.txt");
            $found=0;

            foreach($books as $book){
                list($title,$_isbn)=explode(",", $book);

                if($_isbn==$this->isbn){
                    $found=1;
                    break;
                }
            }
            if($found==1){
                echo "ISBN Exists";
            }else {
                file_put_contents("data.txt", $csv, FILE_APPEND);
            }
        }

        public static function delete($isbn){
            $books=file("data.txt");
            $tmp_records="";

            foreach($books as $book){
                list($title, $_isbn)=explode(",", $book);

                if($_isbn!=$isbn){
                    $tmp_records.=$book;
                }
            }
             file_put_contents("data.txt",$tmp_records);
        }

        public static function update(Book $b){
            $books=file("data.txt");
            $tmp_records="";

            foreach($books as $book){
                list($title,$_isbn)=explode(",", $book);

                if($_isbn==$b->isbn){
                    $tmp_records.=$csv=$b->title.",".$b->isbn.",".$b->author.",".$b->price.PHP_EOL;
                }else {
                    $tmp_records.=$book;
                }
            }
                file_put_contents("data.txt",$csv, FILE_APPEND);
        }

        
        public static function display($isbn=""){
            $books=file("data.txt");

            if($isbn==""){
                echo "<table>";
                echo "<tr><th>Title</th><th>ISBN</th><th>Author</th><th>Price</th><th>Action</th></tr>";
                foreach($books as $book){
                    list($title,$_isbn,$author,$price)=explode(",",$book);
                    echo "<tr>";
                    echo "<td>$title</td>";
                    echo "<td>$_isbn</td>";
                    echo "<td>$author</td>";
                    echo "<td>$price</td>";
                    echo "<td>";
                    echo "<form action='#' method='post' onsubmit='return confirm(\"Are you sure?\")'><input type='hidden' name='txtISBN' value='$_isbn'/><input type='submit' name='btnDelete' value='Delete'/></form>";

                    echo "<form action='#' method='post'><input type='hidden' name='txtISBN' value='$_isbn'/><input type='submit' value='Edit' name='btnEdit'/></form>";

                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{

            }
        }

        public static function get_book($isbn){
            $books=file("data.txt");
            foreach($books as $book){
                list($title,$_isbn,$author,$price)=explode(",",$book);

                if($isbn==$_isbn){
                    return new Book($title,$_isbn,$author,$price);
                }
            }
            return null;
        }
    }

    // $check=new Book("John", "12345", "Atik", "50000");
    // $check->save();
?>