<?php
/*$data = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46
];
$data['address'] = "東京";
$data['children'] = [
    "太郎",
    "次郎",
    "三郎"
];

var_dump($data);

print($data['name']);
print($data['gender']);
print($data['age']);
print($data['address']."\n");
foreach($data['children'] as &$data['child']){
    print($data['child']."\n");
}

var_dump($data);*/

$dic = ["x"=>10, "y"=> 20];
$dic["y"] = 40;

var_dump($dic);

?>