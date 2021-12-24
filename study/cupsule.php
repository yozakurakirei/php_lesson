<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    class PublicCupsule {
        public $foo;

        public function __construct($foo)
        {
            $this->foo = $foo;
        }
    }
    $ins = new PublicCupsule("パブリックカプセル<br>");
    echo $ins->foo;

    class PrivateCupsule {
        // インスタンス、プロパティがprivateになっている場合
        private $private;
        
        public function __construct($private) 
        {
            $this->private = $private;
        }

        // privateの場合はゲッターメソッドを定義する
        public function getName() {
            return $this->private;
        }
    }
    $call = new PrivateCupsule("プライベートからです<br>");
    // ↓クラスの外からなのでエラーになる↓
    echo $call->getName();

    // セッター
    class Settar {
        private $orderCount;

        public function setOrderCount($orderCount) {
            $this->orderCount = $orderCount;
        }
    }

    $juice = new Settar("セッターのジュース");
    echo $juice->setOrderCount(2);


    ?>
</body>
</html>