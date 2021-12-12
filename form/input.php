<?php
// CSRF
session_start();

require 'validation.php';

// クリックジャッキング DENYは拒否
header('X-FRAME-OPTIONS:DENY');

// _から始まる変数はスーパーグローバル変数 連想配列
if(!empty($_POST)) {
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";
}

// 入力(0)・確認(1)・完了(2)
// CSRF(シーサーフ) => 偽のinput.php から別の悪意のあるページに移させる
// >> 偽物か本物か判断する

$pageFlag = 0;
$error = validation($_POST);

if(!empty($_POST["btn_confirm"]) && empty($error)){
  $pageFlag = 1;
}
if(!empty($_POST["btn_submit"])){
  $pageFlag = 2;
}

// サニタイズ
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>PHPフォーム</title>
</head>
<body>
  <?php if($pageFlag === 1) : ?>
  <?php if($_POST["csrf"] === $_SESSION["csrfToken"]) : ?>
    確認画面を表示
    <form action="input.php" method="POST">
      <div>氏名</div>
      <?php echo h($_POST["your_name"]); ?>
      <br>
      <div>メールアドレス</div>
      <?php echo h($_POST["email"]); ?>
      <br>
      <div>ホームページ</div>
      <?php echo h($_POST["url"]); ?>
      <br>
      <div>性別</div>
      <?php if($_POST["gender"] === "0") { echo "男性"; } ?>
      <?php if($_POST["gender"] === "1") { echo "女性"; } ?>
      <?php if($_POST["gender"] === "2") { echo "不明"; } ?>
      <?php if($_POST["gender"] === "3") { echo "答えたくない"; } ?>

      <br>
      <div>年齢</div>
      <?php if($_POST["age"] === "0") { echo "10〜19歳"; }?>
      <?php if($_POST["age"] === "1") { echo "20〜29歳"; }?>
      <?php if($_POST["age"] === "2") { echo "30〜39歳"; }?>
      <?php if($_POST["age"] === "3") { echo "40〜49歳"; }?>
      <?php if($_POST["age"] === "4") { echo "50〜59歳"; }?>
      <?php if($_POST["age"] === "5") { echo "60歳以上"; }?>
      <br>
      <div>お問い合わせ内容</div>
      <?php echo h($_POST["contact"]); ?>
      <br>


      <input type="submit" name="back" value="戻る">
      <input type="submit" name="btn_submit" value="送信する">
      <input type="hidden" name="your_name" value="<?php echo h($_POST["your_name"]); ?>">
      <input type="hidden" name="email" value="<?php echo h($_POST["email"]); ?>">
      <input type="hidden" name="url" value="<?php echo h($_POST["url"]); ?>">
      <input type="hidden" name="gender" value="<?php echo h($_POST["gender"]); ?>">
      <input type="hidden" name="age" value="<?php echo h($_POST["age"]); ?>">
      <input type="hidden" name="contact" value="<?php echo h($_POST["contact"]); ?>">


      <input type="hidden" name="csrf" value="<?php echo h($_POST["csrf"]); ?>">
    </form>
  <?php endif; ?>
  <?php endif; ?>


  <?php if($pageFlag === 2) : ?>
  <?php if($_POST['csrf'] === $_SESSION["csrfToken"]) : ?>
    送信が完了しました🤗
  <?php unset($_SESSION["csrfToken"]); ?>
  <?php endif; ?>
  <?php endif; ?>

  <?php if($pageFlag === 0) : ?>
  <?php 
    if(!isset($_SESSION["csrfToken"])) {
      $csrfToken = bin2hex(random_bytes(32)); 
      $_SESSION["csrfToken"] = $csrfToken;
    }
    $token = $_SESSION["csrfToken"]
  ?>
  
    入力画面を表示
    <form action="input.php" method="POST">
      <div>氏名</div>
      <input type="text" name="your_name" value="<?php if(!empty($_POST["your_name"])) {echo h($_POST["your_name"]);} ?>"> 
      <br>
      <div>メールアドレス</div>
      <input type="email" name="email" value="<?php if(!empty($_POST["email"])) {echo h($_POST["email"]);} ?>">
      <br>
      <div>ホームページ</div>
      <input type="url" name="url" value="<?php if(!empty($_POST["url"])) {echo h($_POST["url"]);} ?>">
      <br>
      <div>性別</div>
      <input type="radio" name="gender" value="0" 
      <?php if(!empty($_POST["gender"]) && $_POST["gender"] === "0") { echo "checked"; }?>>男性
      <input type="radio" name="gender" value="1"
      <?php if(!empty($_POST["gender"]) && $_POST["gender"] === "1") { echo "checked"; }?>>女性
      <input type="radio" name="gender" value="2"
      <?php if(!empty($_POST["gender"]) && $_POST["gender"] === "2") { echo "checked"; }?>>不明
      <input type="radio" name="gender" value="3"
      <?php if(!empty($_POST["gender"]) && $_POST["gender"] === "3") { echo "checked"; }?>>答えたくない
      <br>
      <div>年齢</div>
      <select name="age">
        <option value="">選択して下さい</option>
        <option value="1" selected>0〜19歳</option>
        <option value="2">20〜29歳</option>
        <option value="3">30〜39歳</option>
        <option value="4">40〜49歳</option>
        <option value="5">50〜69歳</option>
        <option value="6">60歳以上</option>
      </select>
      <div>お問い合わせ内容</div>
      <textarea name="contact">
        <?php if(!empty($_POST["contact"])) {echo h($_POST["contact"]);} ?>
      </textarea>
      <br>
      <div>注意事項のチェック</div>
      <input type="checkbox" name="caution" value="1">利用規約に同意する
      <br>
      <input type="submit" name="btn_confirm" value="送信画面へ">
      <input type="hidden" name="csrf" value="<?php echo $token; ?>">
    </form>
  <?php endif; ?>
</body>
</html>