<?php
/*function hello($str){
    print($str);
}
function calc($a, $b){
    print($a * $b);
}
function triangle_area($a, $h){
    return $a * $h / 2;
}*/
$file_list = [];

function add_list($file_name){
    global $file_list;
    array_push($file_list, $file_name.".php");
}

/*hello("Hello World!");
calc(2, 3);

print(triangle_area(2, 3));*/

add_list("function");
var_dump($file_list);

add_list("hello");
var_dump($file_list);
?>