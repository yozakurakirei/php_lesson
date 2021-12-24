<?php
require_once('menu.php');
require_once('review.php');

// インスタンス作成
$pairs = new Menu("ペアーズ", 3480, "./image/pairs.png");
$tapple = new Menu("タップル", 3900, "./image/tapple.jpeg" );
$with = new Menu("With", 3400, "./image/with.jpeg");
$omiai = new Menu("Omiai", 3980, "./image/omiai.jpeg");

$menus = [$pairs, $tapple, $with, $omiai];

$review1 = new Review($pairs->getName(), "またひとり知り合いがペアーズで出会った人と結婚した…5人目…");
$review2 = new Review($omiai->getName(), "出会うまでのやり取りが長く、すぐにはデートできない");

$reviews = [$review1, $review2];
?>