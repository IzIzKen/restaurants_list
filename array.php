<?php

$customers = ["侍　太郎", "侍　次郎", "侍　三郎"];
$numlist = ["one", "two", "three"];

array_push($customers, "samurai");

foreach($customers as &$customer) {
    print($customer."\n");
}
print($numlist[1]);

var_dump($customer);
?>