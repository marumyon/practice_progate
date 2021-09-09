<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="php1.css">
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
    <!--フォームの作り方-->
    <!--フォームの見た目はhtml、入力値の取得はphpを使用する-->
    <!--htmlのフォームタグを使用する-->
    <!--method=getかpost、action=入力データを渡す先のURL-->
    <!--getの場合は送信される値がurlに表示され、postの場合は表示されない-->
    <form method="post" action="php1_sent.php">

    <div class="form-item">名前</div>
    <!--テキストボックスの作り方-->
    <!--input type="text"-->
    <!--name属性で入力された値を取得するときに使う名前をつける-->
    <!--inputタグは閉じタグ不要-->
    <input type="text" name="name">

    <div class="form-item">年齢</div>
    <!--セレクトボックスの作り方-->
    <!--selectタグの中にoptionでタグで選択肢を並べる-->
    <!--例：<option>リンゴ</option>-->
    <!--値を送信するには、name属性で名前をつける-->
    <select name = "age">
    <!--値を送信するには、optionタグの中にvalue属性を指定する-->  
    <!--value属性が送信される値になる-->    
    <option value = "未選択">選択してください</option>
    <!--for文を用いてたくさんのoptionタグを作る-->
      <?php 
        for ($i = 6; $i <= 100; $i++) {
             echo "<option value = '{$i}'> {$i} </option>";//変数展開を用いるには""で囲むこと
        }
      ?>
    </select>

    <div class="form-item">お問い合わせの種類</div>
      <?php 
        $types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
      ?>
    <select name = "category">
    <option value = "未選択">選択してください</option>
      <?php
      //用意した配列$typesからoptionを選ぶ方法
      foreach ($types as $type) {
        echo "<option value = '{$type}'> {$type} </option>";
      }
      ?>
    </select>

    <div class="form-item">内容</div>
    <!--改行を含むテキストボックスの作り方-->
    <!--inputタグ同様、name属性に名前をつける-->
    <!--textareaは閉じタグ必要-->
    <textarea name="body"></textarea>
    <!--送信ボタンの作り方-->
    <!--input type="submit"-->
    <!--value属性に指定された値がボタン上に反映される-->
    <input type = "submit" value = "送信">
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