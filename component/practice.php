<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー</title>
</head>
<body>
    <?php

        class Menu {
                    // インスタンス、プロパティ
                    public $name;
                    public $price;
                    public $arg1;

                    public function __construct($arg1)
                    {
                        $this->$arg1 = $arg1;
                        echo "ここが最初に読み込まれます!コンストラクタの部分です<br>";
                        echo "{$arg1}<br><br>";
                    }

                    // メソッド
                    public function food() {
                        return "{$this->name}を１つください<br>";
                    }
                    public function price() {
                        return "{$this->price}円になります。";
                    }
                }
        
        // 呼び出し
        $menu = new Menu("コンタクトレンズ");
        $menu->name = "カレーライス";
        echo $menu->food();

        $menu->price = 700;
        echo $menu->price();

    ?>
</body>
</html>