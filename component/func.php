<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>関数</title>
</head>
<body>
	<?php
	// ビルドイン関数、ユーザー定義関数
		// ビルドイン関数 count
		$ary = [1,2,3,4,5];
		$result = count($ary);
		$result = $result * 2;
		echo $result;

		// ユーザー定義関数
		function human($name, $age) {
			return "{$name}さん{$age}歳なんですね";
		}
		
		$hinata = human("ひなた", 22);
		echo $hinata;
	?>
</body>
</html>