<?php
// function add_two__num(){
//     $num_one=10;
//     $num_two=67;
//     $result=$num_one+$num_two;
//     echo $result;
// }
// add_two__num();
// function add_two_num(){
//         $num_one=10;
//         $num_two=67;
//         $result=$num_one+$num_two;
//         return $result;
//     }
//     echo add_two_num();
//     $val=add_two_num();
//     echo "<br> $val";
//only for interger value
declare(strict_types=1);
    // function add_two__num(int $num_one,int $num_two){
    //     $result=$num_one+$num_two;
    //     echo $result;
    // }
    // $val_one=78;
    // $val_two=56;
    // add_two__num($val_one,$val_two);
    // add_two__num(45,20);

    function add_two_num(int $num_one,int $num_two){
        $result=$num_one+$num_two;
        return $result;
    }
    $val_one=78;
    $val_two=56;
    echo add_two_num($val_one,$val_two);
    echo add_two_num(45,20);

?>