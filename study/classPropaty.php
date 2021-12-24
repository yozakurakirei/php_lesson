<?php

class Menu {
    public static $count = 0;
    public static $name = "パイナップル";

    public function __construct()
    {
        self::$count++;
    }
}

$menu1 = new Menu("カレーライス");
$menu2 = new Menu("チキン南蛮");
$menu3 = new Menu("お味噌汁");
$menu4 = new Menu("サイゼリアのサラダ");

$menus = [$menu1,$menu2,$menu3,$menu4];
$menu = Menu::findByName($menus, "カレーライス");
echo $menu->name;


// クラスプロパティにアクセスする方法
echo "商品:",Menu::$count,"品";
echo "<br>";
echo "商品名",Menu::$name;

class Menu2 {
    public static function findByName($menus, $name);
}

?>

