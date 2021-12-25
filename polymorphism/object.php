<?php

class Staff {
    public $name;
    public $age;

    public function __construct($name) {
        // インスタンス生成時にここが最初に呼び出される
        $this->name = $name;
    }

    public function hello() {
        echo "こんにちは{$this->name}さん";
    }

}

// instance
$tanaka = new Staff("田中太郎");

echo $tanaka->name;
echo "<br>";
echo $tanaka->hello();

?>