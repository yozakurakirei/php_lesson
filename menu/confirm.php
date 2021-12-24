<?php require_once('data.php') ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>会えた女性の人数</title>
</head>
<body>
    <div class="order-wrapper">
        <h2>会えた女性の人数は？</h2>
        <?php $totalGirls = 0; ?>
        <?php foreach($menus as $menu): ?>
            <?php $numberOfGirls = $_POST[$menu->getName()] ?>
            <p class="order-amount">
                <?php echo $menu->getName() ?>
                <?php echo $numberOfGirls ?>人
            </p>
            
            <?php $totalGirls += $numberOfGirls ?>
        <?php endforeach ?>
        <br>
        <h3>合計<?php echo $totalGirls ?>人</h3>
    </div>
</body>
</html>