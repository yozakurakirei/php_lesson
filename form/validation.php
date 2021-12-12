<?php

function validation($request) { // postの連想配列が$requestに入る

  $error = [];

  if(empty($request["your_name"])) {
    $error[] = "氏名の入力は必須です";
  }

  return $error;

}

?>