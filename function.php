<?php

/* function
  function 関数名(引数, 引数) {
    // 処理
    return //戻り値;
  }
*/

// 引数なし 戻り値なし
function test() {
  // 処理
  echo "テスト";
}

test();

echo "<br />";

// 引数あり 戻り値なし
$hello = "こんにちは、PHP!<br />";
$goodbye = "さようなら<br />";

function hello($greeting, $bye) {
  echo $greeting, $bye;
}

hello($hello, $goodbye);

// 引数なし　戻り値あり
function getNumberComment() {
  return "35<br />";
}

$comment = getNumberComment();
echo $comment;
// echo getNumberComment();

// 引数2つ、戻り値あり
function sumNum($int1, $int2) {
  $result = $int1 * $int2;
  return "{$result} <br />";
}

echo sumNum(2, 3);
?>

<hr>
<h3>組み込み関数</h3>

<?php

// 文字列の長さ
$text = "abc";
$ja = "あいうえお";
echo strlen($text);
echo "<br />";
echo strlen($ja);
echo "<br />";
echo mb_strlen($ja);
echo "<br />";

// 文字列の置換
$str = "文字列を置換します。<br />";

echo str_replace("置換", "ちかん", $str);

$str_2 = "点で、分割をします。";

echo explode("、", $str_2);

echo "<pre>";
  var_dump(explode("、", $str_2));
echo "</pre>";


$textReplace = 'apple, amazon, google, facebook<br />';
$replace = str_replace('facebook', 'microsoft', $textReplace);
echo $replace;

// 正規表現
$str_3 = "特定の文字列があるか確認する";
echo preg_match("/文字列/", $str_3);
echo preg_match("/る/", $str_3);
// 1 => 入っているという

echo "<br />";
// 指定文字列から文字列を取得する
// 指定したところより先を取得する
echo substr("あいうえお<br />", 2);
echo substr("abcde<br />", 2);
echo mb_substr("かきくけこ", 2);
?>

<hr>
<h3>配列の関数</h3>

<?php
// 配列に配列を追加する
$arry = ["PHP", "Ruby", "Python"];
array_push($arry, "Java", "C++");

echo "<pre>";
var_dump($arry);
echo "</pre>";
?>

<hr>
<h3>組み込み関数 in ユーザー定義関数</h3>
<?php

$postalCode = "123-4567";
// camelCase => helloWorld; snackCase => hello_world
function checkPostalCode($str) {
  $replace = str_replace("-", "", $str);
  $length = strlen($replace);

  var_dump($length);
  if($length === 7) {
    return true;
  } else {
    return false;
  }
}

var_dump(checkPostalCode($postalCode));

?>

<hr>
<h3>スコープ</h3>
<?php

$globalValiable = "グローバル変数<br />";

function check($str) {
  $localValiable = "ローカル変数<br />";
  global $globalValiable; // globalはほぼ使わない ごちゃごちゃにんなったりする
  echo $globalValiable;
  echo $str;
}

check("どんな変数だろう？<br />");
// print($globalValiable);

?>

<hr>
<h3>ファイルの読み込み</h3>

<?php


?>