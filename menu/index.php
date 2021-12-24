<?php require_once('data.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>メニュー</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">マッチングアプリリスト</h1>
    <div class="menu-items">
      <?php foreach($menus as $menu): ?>
        <div class="menu-item">
            <img src="<?php echo $menu->image ?>" alt="">
        
            <h3 class="menu-item-name"><?php echo $menu->name; ?></h3>
            <p class="price"><?php echo $menu->price; ?>円</p>
            <p class="price">1日あたり<?php echo $menu->perDay(); ?>円(31日計算)</p>
        </div>
      <?php endforeach ?>  
    </div>
  </div>
</body>
</html>
