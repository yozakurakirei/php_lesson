<?php
require_once('menu.php');

// インスタンス作成
$pairs = new Menu("ペアーズ", 3480, "./image/pairs.png");
$tapple = new Menu("タップル", 3900, "./image/tapple.jpeg" );
$with = new Menu("With", 3400, "./image/with.jpeg");
$omiai = new Menu("Omiai", 3980, "./image/omiai.jpeg");

$menus = [$pairs, $tapple, $with, $omiai];

?>