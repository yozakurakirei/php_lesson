<?php require_once('data.php');
      require_once('menu.php');
?>


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
    <h3>サイト数：<?php echo Menu::$count ?></h3>
    <form action="confirm.php" method="post">
        <div class="menu-items">
            <?php foreach($menus as $menu): ?>
                <div class="menu-item">
                    <img src="<?php echo $menu->getImage(); ?>" alt="">
                    <h3 class="menu-item-name">
                        <a href="show.php?name=<?php echo $menu->getName() ?>">
                            <?php echo $menu->getName(); ?>
                        </a>
                    </h3>
                    <p class="price"><?php echo $menu->getPrice(); ?>円</p>
                    <p class="price">1日あたり<?php echo $menu->perDay(); ?>円(31日計算)</p>

                    <p>会えた女性の人数</p>
                    <input type="text" value="0" name="<?php echo $menu->getName(); ?>">
                    <span>人</span>
                </div>
            <?php endforeach ?>  
        </div>
        <input type="submit" value="送信">
    </form>        
  </div>
</body>
</html>
