<!DOCTYPE html>
<?php 
  
?>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録フォーム</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div id="confirm" class="confirm">
    <div class="confirm__outer">
      <p>氏名</p>
      <p><?= $_POST['name'];?></p>
    </div>
    <div class="confirm__outer">
      <p>フリガナ</p>
      <p><?= $_POST['furigana'];?></p>
    </div>
    <div class="confirm__outer">
      <p>メール</p>
      <p><?= $_POST['email'];?></p>
    </div>
    <div class="confirm__outer">
      <p>好きな音楽のカテゴリ</p>
      <p><?= $_POST['name'];?></p>
    </div>
    <div class="confirm__outer">
      <p>メールで演奏会の通知を受け取る</p>
      <p><?= $_POST['name'];?></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/index.js"></script>
</body>
</html>