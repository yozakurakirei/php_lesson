<?php
require_once("robot.php");

// オブジェクト、インスタンス
$robot = new Robot("ロボ太郎", "red");

$robot2 = new Robot("ロボ二郎", "blue");

echo $robot->getName()."  ";
// echo $robot->getAge()."歳　";
// echo $robot->getFrom();
echo "<br>";
echo $robot2->getName()."<br>";

echo $robot->getColor()."<br>";

$a = Robot::createRedRobot("ロボ太郎ちゃん");
echo $a->getColor();



?>