<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>クラスとオブジェクト</title>
</head>
<body>
    <?php
    // クラスに定義したデータ >> プロパティ
    // プロパティ、メンバー変数、フィールド、インスタンス変数は同じ意味
    // private,public,protectedはアクセス修飾子
        class Human {
            public $name;
            private $birthday;
            private $gender;

            // constructは最初にやっておきたい処理
            public function __construct($name, $birthday, $gender) {
                $this->name = $name;
                $this->birthday = $birthday;
                $this->gender = $gender;
            }
            
            // メソッド >> walkのこと
            public function walk()
             {
                 echo "{$this->name}歩くぜ<br />";
             }

             public function eat()
             {
                 echo '食べるぜ!<br />';
             }
        }

        // コンストラクタの呼び出しはクラス外
        $human = new Human('Hinata', '12月28日', '女');
        $human->walk();
        $human->eat();
    ?>
</body>
</html>