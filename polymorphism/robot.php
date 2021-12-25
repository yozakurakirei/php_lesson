<?php 

class Robot {
    // プロパティの初期値はnull
    private $name;
    private $age = 20;
    private $from;
    private $color;

    // 静的メソッド
    public static function createRedRobot($name) {
        return new self($name, "red");
    }
    public static function createBlueRobot($name) {
        return new self($name, "blue");
    }

    // コンストラクタ
    // デフォルト値を入れておけば、インスタンス生成時の引数に入れなくてもOK
    public function __construct($name, $color) {
        $this->setName($name);
        // $this->setAge($age);
        // $this->setFrom($from);
        $this->color = $color;
    }

    // セッター 書き込み
    public function setName($name) {
        $this->name = (string)filter_var($name);
    }
    // ゲッター 読み取り
    public function getName() {
        return $this->name;
    }

    // age setter
    public function setAge($age) {
        $this->age = (integer)filter_var($age);
    }
    // age getter
    public function getAge() {
        return $this->age;
    }

    // from setter
    public function setFrom($from) {
        $this->from = (string)filter_var($from);
    }

    // from getter 
    public function getFrom() {
        return $this->from;
    }

    // color getter
    public function getColor() {
        return $this->color;
    }
}

?>