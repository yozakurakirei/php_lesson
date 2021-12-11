<h3>読み込みするファイルです</h3>
<hr>

<?php

require 'common/common.php';
require 'component/header.php';

echo __DIR__;
echo "<br />";
echo __FILE__;
echo "<br />";

echo $commonVariable;
echo "<br />";

$header = hello("Be", "Welcom to my site", "Ne");
echo $header;

echo "<br>";

$profile = outValiable("Hinata", 33);
echo $profile;
?>