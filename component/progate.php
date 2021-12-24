<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロゲート</title>
</head>
<body>
    <?php
        class Menu {
            // インスタンス、プロパティ
            public $name;
            
            // メソッド
            public function lunch() {
                return "うどん<br />";
            }

        }
        $menu = new Menu();
        // メソッドのアクセス
        echo $menu->lunch();

        // プロパティのセット
        $menu->name = "カレーライス<br />";
        // セットした値にアクセス
        echo $menu->name;
    ?>
</body>
</html>