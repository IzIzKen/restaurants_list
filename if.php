<?php
//$num = 40;
$even_num = [];
$odd_num = [];
$num_list = [1, 2, 3, 4, 5];

/*if($num > 5 and $num <12){
    print("Hello World!");
}
function check($answer){
    if($answer == 42){
        print("Answer to the Ultimate Question of Life, the Universe, and Everything");
    }
}*/
function sort_number($num){
    global $even_num, $odd_num;

    if($num % 2 == 0){
        array_push($even_num, $num);
    }
    else{
        array_push($odd_num, $num);
    }
}

//check($num);
foreach($num_list as &$num){
    //print($num);
    sort_number($num);
}
var_dump($even_num);
var_dump($odd_num);

?>