<?php
require_once('menu.php');
require_once('data.php');


$menuName = $_GET['name'];
$menu = Menu::findByName($menus, $menuName);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>メニュー</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="container">
    <!-- ソースコードを貼り付けてください -->
    <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
    <p>月<?php echo $menu->getPrice() ?>円</p>

    <!-- review -->
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>レビュー一覧</h4>
        </div>
        <?php foreach($reviews as $review): ?>
            <h3><?php echo $review->getMenuName() ?></h3>
            <p><?php echo $review->getBody() ?></p>
        <?php endforeach ?>
      </div>
    </div>
    <a href="index.php">← メニュー一覧へ</a>
    
  </div>
</body>
</html>