<?php
//$animals = ["dog", "cat", "bird"];

/*for($i = 0; $i < 10; $i++){
    print("Hello World!\n");
}
foreach($animals as &$animal){
    print($animal."\n");
}*/
for($i = 1; $i <= 30; $i++){
    /*if($i % 3 == 0){
        print($i."は3の倍数です\n");
    }*/
    if($i % 15 ==0){
        print("FizzBuzz\n");
    }
    else if($i % 5 == 0){
        print("Buzz\n");
    }
    else if($i % 3 == 0){
        print("Fizz\n");
    }
    else{
        print($i."\n");
    }
}
?>