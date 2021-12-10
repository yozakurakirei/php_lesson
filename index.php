<?php

$ary_menber = [
  "name" => "高見沢",
  "height" => 172,
  "work" => "ギタリスト",
];

echo "$ary_menber[name]";
echo "$ary_menber[work]";

echo "<pre>";
  var_dump($ary_menber);
echo "</pre>";

?>

<?php
  // 連想配列
  $array_member_2 = [
    "TOKIO" => [
      "城島" => [
        "height" => 173,
        "work" => "ギタリスト"
      ],
      "国分" => [
        "height" => 170,
        "work" => "キーボード",
      ], 
      "松岡" => [
        "height" => 180,
        "work" => "ドラム"
      ],
      "長瀬" => [
        "height" => 185,
        "work" => "ボーカル＆ギター",
      ],
    ]
  ];

  echo $array_member_2["TOKIO"]["城島"]["work"];

?>
<hr>
<h3>演算子</h3>
<?php
  $a = 1;
  $b = 2;

  echo $a + $b;
  
  ?>
<hr>
<h3>条件分岐と繰り返し</h3>
<?php 

$tall = 170;

if($tall === 90) 
  echo "小さくてかわいいね";
elseif($tall > 160)
  echo "身長が{$tall}なら大人ですかね？\n";
else
  echo "赤ちゃんでないことは確かですね";

echo "<br />";

$signal = "赤";
if($signal === "赤") 
  echo "気をつけてすすめ";
elseif($signal === "黄色")
  echo "進め";
else
  echo "喜んで堂々と進め！";

echo "<br />";

// dataが入っているかどうかの判定
// isset empty is_null

$e = "";
if(!empty($e))
  echo "変数は空じゃないです";
else
  echo "変数は空なんです";

echo "<br />";

if(empty($e)) 
  echo "変数は空ですね";

echo "<br />";
// AND OR
$signal_1 = "赤";
if($signal_1 === "赤" && $signal_1 === "赤色")
  echo "止まってください";
elseif($signal_1 === "黄" || $signal === "黄色")
  echo "気をつけて渡ってください";
else
  echo "渡らない方がいいかもしれません。";

echo "<br />";
// 三項演算子 1行で書けるようになる
// 条件 ? true : false

$math = 80;
$comment = $math > 80 ? "すごい" : "頭悪いね";
echo $comment;
?>

<hr>
<h3>繰り返し</h3>
<?php

foreach($ary_menber as $taka)
  echo $taka;

foreach($ary_menber as $key => $value)
  echo "{$key}は${$value}ですね";
?>

<hr>
<h3>for, while</h3>
<ul>
  <li>for => 繰り返す数が決まっている</li>
  <li>while => 決まっていない</li>
</ul>
<?php 
  for ($i = 0; $i < 10; $i ++) {
    echo $i + "\n";
  }

  echo "<br />";

  $n = 0;
  while($n < 5) {
    echo $n;
    $n ++;
  }
?>

<hr>
<h3>swith</h3>
<p>PHPのswitchはあまり使わない => ifの方が見やすかったりするので</p>

<?php

$data = 1;
switch($data) {
  case 1:
    echo "${data}になりました<br />";
    break;
  default:
    echo "${data}ですね";
}

?>

<hr>
<h3>FizzBuzz問題</h3>

<?php

for($i = 1; $i <= 100; $i++) {
  if($i % 15 == 0 )
    echo "FizzBuzz!<br />";
  elseif($i % 3 == 0)
    echo "Fizz<br />";
  elseif($i % 5 == 0)
    echo "Buzz<br />";
  else
    echo "{$i}<br />";
}

?>