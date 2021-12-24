<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラス・オブジェクト</title>
</head>
<body>
    <?php 

    class Menu {
        public $name;

        // construct
        public function __construct($greeting)
        {   
            $this->greeting = $greeting;
        }
        
        // method
        public function hello() {
            echo $this->greeting,"インスタンスから{$this->name}が来たぞ";
        }
    };
    
    // インスタンス生成
    $curry = new Menu("ナマステ！");
    $curry->name="カレーライス";
    $curry->hello();

    echo "<br>";
        
    $ramen = new Menu("しゃあっせー！");
    $ramen->name="醤油ラーメン";
    $ramen->hello();
    
    ?>
</body>
</html>