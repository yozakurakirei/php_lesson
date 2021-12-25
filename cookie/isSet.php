<?php

$var = "";

// true 
if (isset($var)) {
    echo "Trueなのでテキストが表示される<br>";
}

$a = "テスト";
$b = "他のテスト";

var_dump(isset($a));
var_dump(isset($a, $b));


var_dump($a);
var_dump($a,$b);

$ary = array(
    "test" => 1,
    "hello" => null,
    "pie" => array("a"=>"apple"),
);

var_dump(isset($a["test"]));

?>