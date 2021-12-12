<?php

class Product {
  // アクセス修飾子 
  // private(外からアクセス不可), protected(自分・継承したクラス), public(公開)

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

$instance->addProduct("追加分");
echo "<br />";

$instance->getProduct();
echo "<br />";

// 静的にインスタンスを作らず(static) クラス名::関数名
Product::getStaticProduct("静的");
echo "<br />";


?>