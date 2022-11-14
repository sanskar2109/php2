<?php
//
//class gla
//{
//    public $addmission = 'open';
//    private $exam = 'endterm';
//   public function __construct(){    // Important question define Magic function
//       echo "Welcome to constructor <br>"; // Magic function start with underscore
//        echo $this->addmission='opening soon';
//
//    }
//
//    public function display()
//    {
//       echo "empty";
//    }
//
//}
//$stu_gla = new gla;
//$stu_gla_two = new gla();
////var_dump($stu_gla);
//echo "<br>";
//echo $stu_gla->addmission . "<br>";
//$stu_gla_two->addmission = 'closed';
//echo $stu_gla->addmission . "<br>";
//echo $stu_gla_two->addmission;// explain the variable of psuedo variable and pseudo variable act as object inside the class.
//$stu_gla->display();
//echo "<br>";
//echo $stu_gla->addmission . "<br>";
//$stu_gla_two->addmission = 'coming soon';
//echo $stu_gla->addmission . "<br>";
//echo $stu_gla_two->addmission;


class base{
    public $data="sets";
    public function __construct(){
        $this->data='unset';
}
public function display(){
        $this->data='new';
     }
     public function __destruct()
     {
         echo "<br> game over";


     }
}
$obj_base_one=new base();
$obj_base_one->display();
$obj_base_two=new base;
echo $obj_base_two->data;
echo "<br>";
echo $obj_base_one->data;





