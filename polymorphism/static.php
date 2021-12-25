<?php 

class Sample {
    public $name = "インスタンスプロパティ";
    public function hello() {
        return "インスタンスメソッドです";
    }

    public static $property = "静的プロパティ"; // 静的プロパティ
    public static function method() {
        // 静的メソッド
        echo "静的メソッド";
        echo self::$property;
    }
    const OBJECT_CONSTANT = null; //オブジェクト定数 初期値が必須
    // 配列、オブジェクト、リソースの代入不可、再代入も不可

    function instance() {
        echo "インスタンスメソッド内からの呼び出し<br>";
        echo self::$property."<br>";
        echo self::method();
    }
}

$sample = new Sample();
echo Sample::$property;
echo "<br>";

echo Sample::method()."<br>"; 
echo $sample->name."<br>";
echo $sample->hello()."<br>";

echo $sample->instance();
?>

