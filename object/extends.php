<?php
// 親 / 基底クラス/ スーパークラス
class BaseProduct {
  // プロパティ、メソッド
  public function echoProduct() {
    echo "親クラスからです";
  }
  // オーバーライド(上書き)
  public function getProduct() {
    echo "親のgetProduct関数です<br />";
    echo "オーバーライドってやつです";
  }
}

// 子 / 派生クラス / サブクラス
final class Product extends BaseProduct {
  // アクセス修飾子 
  // 変数
  private $product = [];

  // 関数
  // __constructはクラス実行時に最初に呼び出される
  function __construct($product) {
    $this -> product = $product;
  }
  
  public function getProduct() {
    echo $this -> product;
  }

  public function addProduct($item) {
    $this -> product = $item;
  }

  public static function getStaticProduct($str) {
    echo $str;
  }
}

$instance = new Product("テスト");

var_dump($instance);

$instance->getProduct();
echo "<br />";

// 親クラスのメソッド
$instance->echoProduct();
echo "<br />";

$instance->addProduct("追加分");
echo "<br />";

$instance->getProduct();
echo "<br />";

// 静的にインスタンスを作らず(static) クラス名::関数名
Product::getStaticProduct("静的");
echo "<br />";


?>