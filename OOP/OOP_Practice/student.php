<?php
    class Student{
        private $id;
        private $name;
        private $batch;
    

    function __construct($id, $name, $batch){
        $this->id=$id;
        $this->name=$name;
        $this->batch=$batch;
    }

    public function save(){
        $csv=$this->id.",".$this->name.",".$this->batch.PHP_EOL;
        $students=file("database.txt");
        $found=0;

        foreach($students as $student){
            list($_id, $name)=explode(",", $student);
            if($this->id==$_id){
                $found=1;
                break;
            }
        }
        if($found==1){
            echo "File Already Exists";
        }else{
            file_put_contents("database.txt",$csv,FILE_APPEND);
        }
    }


    public static function display($id=""){
        $students=file("database.txt");

        if($id==""){
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Batch</th></tr>";
            foreach($students as $student){
                list($id, $name, $batch)=explode(",", $student);
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$name</td>";
                echo "<td>$batch</td>";
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>Batch</th></tr>";
            foreach($students as $student){
                list($_id, $name, $batch)=explode(",", $student);
                if($id==$_id){
                    
                    echo "<tr>";
                    echo "<td>$id</td>";
                    echo "<td>$name</td>";
                    echo "<td>$batch</td>";
                    echo "</tr>";
                }
            }
             echo "</table>";
        }
    }
}
    // $test=new Student(1261536, " EyeAna", " Batch-02/03");
    // $test->save();
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
            background: lightgray;
            color: #000;
            width: 500px;
            margin-top: 20px;
        }
        table,th,tr,td{
            border: 1px solid #000;
            border-collapse: collapse;
            padding: 5px;
            box-sizing: border box;
        }
        th,tr, td{
            text-align: center;
        }
        tr{
            font-weight: bold;
        }
        th{background:gray; color: #ffffff;font-size: 22px}
    </style>
</head>
<body>
    <form action="#" method="post">
        <div>ID <br/>
            <input type="text" name="txtName" id="">
        </div>
        <div><br>
            <input type="submit" value="Result" name="txtResult">
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST["txtResult"])){
        $id=$_POST["txtName"];
        Student::display($id);
    }
?>