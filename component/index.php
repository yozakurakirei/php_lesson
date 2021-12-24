<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progateフォーム</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>

  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <!-- この下にformタグを書いていきましょう -->
      <form action="sent.php" method="post">
        <p>名前</p>
        <input type="text" name="name">
        <p>メールアドレス</p>
        <input type="text" name="email">
        <p>お問い合わせ内容</p>
        <textarea name="text" id="#" cols="30" rows="10"></textarea>
        <button type="submit" value="sent">送信</button>
      </form>
    </div>
  </div>
  
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
    </div>
  </div>
</body>
</html>