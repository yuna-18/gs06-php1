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
  <h1>ユーザー登録フォーム</h1>
  <div class="registration" id="registration">
    <form action="" method="post" class="form__container">
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
          <p class="question">好きな音楽のカテゴリ</p>
          <ul class="input-check__list">
            <li class="input-check__item">
              <input type="checkbox" name="orchestra" id="orchestra">
              <label for="orchestra">オーケストラ</label>
            </li>
            <li class="input-check__item">
              <input type="checkbox" name="wind-orchestra" id="wind-orchestra">
              <label for="wind-orchestra">吹奏楽</label>
            </li>
            <li class="input-check__item">
              <input type="checkbox" name="chamber-music-ensemble" id="chamber-music-ensemble">
              <label for="chamber-music-ensemble">室内楽・アンサンブル</label>
            </li>
            <li class="input-check__item">
              <input type="checkbox" name="jazz" id="jazz">
              <label for="jazz">ジャズ</label>
            </li>
            <li class="input-check__item">
              <input type="checkbox" name="solo" id="solo">
              <label for="solo">ソロ</label>
            </li>
          </ul>
        </div>
        <div class="input__outer">
        <p class="question">メールで演奏会の通知を受け取れます。</p>
        <div class="input-check__item">
          <input type="checkbox" name="subscribe" id="subscribe">
          <label for="subscribe">受け取る</label>
        </div>
        </div>
    </form>
    <a class="confirm-btn" href="./php/confirm.php">確認する</a>
  </div>
</body>

</html>