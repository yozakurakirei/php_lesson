<?php 
// ファイルの丸ごと読み込み
$contactFile = ".contact.dat";

$fileContents = file_get_contents($contactFile);

echo "{$fileContents}<br />";

// ファイルの書き込み(上書き)
// file_put_contents($contactFile, "ファイルの上書きです<br />");

// ファイルの書き込み(追記)
file_put_contents($contactFile, "ファイルの追記です<br />", FILE_APPEND);

// csv
$allData = file($contactFile);

foreach($allData as $lineData) {
  $lines = explode(",", $lineData);
  echo $lines[0], "<br>";
  echo $lines[1], "<br>";
  echo $lines[2], "<br>";
  echo $lines[3], "<br>";
}
?>
