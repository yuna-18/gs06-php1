<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録フォーム</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div id="confirm" class="confirm">
    <div class="confirm__outer">
      <p>氏名</p>
      <p><?= $_POST['name']; ?></p>
    </div>
    <div class="confirm__outer">
      <p>フリガナ</p>
      <p><?= $_POST['furigana']; ?></p>
    </div>
    <div class="confirm__outer">
      <p>メール</p>
      <p><?= $_POST['email']; ?></p>
    </div>
    <div class="confirm__outer">
      <p>好きな音楽のカテゴリ</p>
      <?php
      if (!empty($_POST['categories'])) {
        echo '<ul>';
        foreach ($_POST['categories'] as $category) {
          echo '<li>' . htmlspecialchars($category, ENT_QUOTES, 'UTF-8') . '</li>';
        }
        echo '</ul>';
      } else {
        echo '<p>選択されたカテゴリはありません。</p>';
      }
      ?>
    </div>
    <div class="confirm__outer">
      <p>メールで演奏会の通知を受け取る</p>
      <p>
        <?php
          if (!empty($_POST['subscribe-eamil'])) {
            echo $_POST['subscribe-mail']; 
          }else {
            echo "受け取らない";
          }
        ?>
       </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
</body>

</html>