<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列</title>
</head>
<body>
    <?php

    // foreach 配列、連想配列に対して、先頭のデータから取り出していく
    $fruits = array(
        "リンゴ" => 90,
        "みかん" => 100,
        "パイナップル" => 300,  
    );
    
    foreach($fruits as $key => $value) {
        echo "{$key}は{$value}円ですね";
        echo "<br>";
    };
    

    // fizzbuzz
    for($i=1; $i<=100; $i ++) {
        if ($i % 15 === 0) {
            echo "FizzBuzz<br>";
        } else {
            echo "{$i}<br>";
        }
    };

    ?>
</body>
</html>