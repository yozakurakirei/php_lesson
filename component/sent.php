<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>確認画面</h2>
    <p>お名前</p>
    <?php echo $_POST['name']; ?>
    <p>メールアドレス</p>
    <?php echo $_POST["email"]?>
    <p>お問い合わせ内容</p>
    <?php echo $_POST["text"]?>
</body>
</html>