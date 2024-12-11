<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録フォーム</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="registration" id="registration">
    <form action="" method="post">
      <div class="input__outer">
        <label for="name">氏名</label>
        <input type="text" name="name" id="name">
      </div>
      <div class="input__outer">
        <label for="furigana">フリガナ</label>
        <input type="text" name="furigana" id="furigana">
      </div>
      <div class="input__outer">
        <label for="email">メール</label>
        <input type="text" name="email" id="email">
      </div>
      <div class="input__outer">
        <p>好きな音楽のカテゴリ</p>
        <input type="checkbox" name="orchestra" id="orchestra">
        <label for="orchestra">オーケストラ</label>
        <input type="checkbox" name="wind-orchestra" id="wind-orchestra">
        <label for="wind-orchestra">吹奏楽</label>
        <input type="checkbox" name="chamber-music-ensemble" id="chamber-music-ensemble">
        <label for="chamber-music-ensemble">室内楽・アンサンブル</label>
        <input type="checkbox" name="jazz" id="jazz">
        <label for="jazz">ジャズ</label>
        <input type="checkbox" name="solo" id="solo">
        <label for="solo">ソロ</label>
      </div>
      <div class="input__outer">
        <p>メールで演奏会の通知を受け取れます。</p>
      <input type="checkbox" name="subscribe" id="subscribe">
      <label for="subscribe">受け取る</label>
      </div>
    </form>
    <button type="submit">確認する</button>
  </div>
  
  </div>
</body>
</html>