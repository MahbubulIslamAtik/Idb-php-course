<?php
  class Book{
    private $title;
    private $isbn;
    private $author;
    private $price;

    function __construct($title, $isbn, $author, $price){
      $this->title=$title;
      $this->isbn=$isbn;
      $this->author=$author;
      $this->price=$price;
    }

    //setter function
    public function set_title($title){
        $this->title=$title;
      }
  
      // getting Function 
      public function get_title(){
        return $this->title;
      }
  
      // setter function
      public function set_isbn($isbn){
        $this->isbn=$isbn;
      }
  
      //getting function
      public function get_isbn(){
        return $this->isbn;
      }
  
    // setter function
    public function set_author($author)
    {
      $this->author= $author;
    }
  
    //getting function
    public function get_author()
    {
      return $this->author;
    }
  
    // setter function
    public function set_price($price)
    {
      $this->price = $price;
    }
  
    //getting function
    public function get_price()
    {
      return $this->price;
    }

  public function save(){
    $csv=$this->title.",".$this->isbn.",".$this->author.",".$this->price.PHP_EOL;
    $books=file("data.txt");
    $found=0;

    foreach($books as $book){

      list($title,$_isbn)=explode(",",$book);

      if($this->isbn==$_isbn){
        $found=1;
        break;
      }
    }
    if($found==1){
      echo "ISBN Exists";
    }else{
      file_put_contents("data.txt", $csv, FILE_APPEND);
    }
  }

  public static function delete($isbn){
    $books=file("data.txt");

    $tmp_records="";

    foreach($books as $book){
      list($title, $_isbn)=explode(",",$book);

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
      list($title, $_isbn)=explode(",",$book);

      if($_isbn==$b->isbn){
        $tmp_records.=$csv=$b->title.",".$b->isbn.",".$b->author.",".$b->price.PHP_EOL;
      }else{
        $tmp_records=$book;
      }
    }
    file_put_contents("data.txt",$tmp_records);
  }

  public static function display_all($isbn=""){
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
        echo "<td>
                <form action='#' method='post' onsubmit='return confirm(\"Are you sure?\")'>
                <input type='hidden' name='txtISBN' value='$_isbn' />
                <input type='submit' value='Delete' name='btnDelete'/></form>
            </td>";

        echo "<td>
            <form action='#' method='post' onsubmit='return confirm(\"Are you sure?\")'>
            <input type='hidden' name='txtISBN' value='$_isbn' />
            <input type='submit' value='Update' name='btnEdit'/></form>
        </td>";
        echo "</tr>";
      }
      echo "</table>";
    }
  }


  public static function get_book($isbn){
    foreach($books as $book){
        list($title, $_isbn)=explode(",",$book);

        if($isbn==$_isbn){
           return new Book($name,$isbn,$author,$price);
        }
    }
  }
  return [];
}

  // --------CRUD----------------//

  //REQUIRE_ONCE("BOOK_CLASS.PHP);

  // **** Insert ****/
  //$book=new Book("Introduction PHP, JavaScript, MySQL, Laravel", "1261531", "Mahbubul Islam", 50000);
  //$book=new Book("Introduction PHP,HTML5,CSS3,JQuery, JavaScript", "1545316", "Ibrahim", 80000);
  //$book->save();

  // *** DELETE ***//
  // Book::delete("1545316");

  //**Update ****//

//$book=new Book("Introduction MySQL", "1545316", "Mahbubul Islam", 50000);
  //Book::update($book);

  //** Select** *//
  //Book::display();

  
  
  
  
  // $java=new Book("Introduction Java, ", ", 5616165, ", "Mahbubul, ", " 3000");

  // $java->set_title("Introduction C++");
  
  // echo $java->get_title();
  // echo $java->get_isbn();
  // echo $java->get_author();
  // echo $java->get_price();
?>