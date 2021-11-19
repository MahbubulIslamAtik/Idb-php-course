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

    //setter function
    public function set_title($title){
      $this->title=$title;
    }

    //getting function
    public function get_title(){
        return $this->title;
    }

    //setter function
    public function set_isbn($isbn){
        $this->isbn=$isbn;
    }
  
      //getting function
    public function get_isbn(){
          return $this->isbn;
    }

   //--------------Operatoin-------------------//
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
            file_put_contents("data.txt",$csv,FILE_APPEND);
          }
    }

    public static function delete($isbn){

        $books=file("data.txt");
         
        $tmp_records="";

        foreach($books as $book){           
            list($title,$_isbn)=explode(",",$book);

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

            list($title,$_isbn)=explode(",",$book);

            if($_isbn==$b->isbn){

                $tmp_records.= $csv=$b->title.",".$b->isbn.",".$b->author.",".$b->price.PHP_EOL;
       
            }else{

                $tmp_records.=$book;
            
            }
        }

        file_put_contents("data.txt",$tmp_records);

    }

    public static function display($isbn=""){
    
        $books=file("data.txt");        
     
       if($isbn==""){
            echo "<table>";
            echo "<tr><th>Title</th><th>ISBN</th><th>Author</th><th>Price</th></tr>";
            foreach($books as $book){  

                list($title,$_isbn,$author,$price)=explode(",",$book);
              echo "<tr>";
               echo "<td>$title</td>";
               echo "<td>$_isbn</td>";
               echo "<td>$author</td>";
               echo "<td>$price</td>";
              echo "</tr>";
            
            }
            echo "</table>";

        }else{            

        }



    }
    

  } 

//---------CRUD----------//

 //require_once("book_class.php");
   //**** Insert****/
   $book=new Book("Introduction JQuery","83433454","Tanveer",1000);
   $book->save();

   //***DELETE*** */
   //Book::delete("834333");

   //***Update*** */
  // $book=new Book("Introduction JavaScript","8343353","Wasaldd",3000);
   //Book::update($book);

   //** Select****/
   Book::display();

?>