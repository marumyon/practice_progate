<?php require_once ('php2_cookdate.php') ?>
<!--別ファイルを読み込む方法-->
<!--require_once('ファイル名')-->
<!--dateで定義されたデータを使用しているので-->
<!--php2_cookdate.phpを読み込む-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="php2_cooksite.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <!--フォームを作成する-->
    <form method="post" action="php2_cookconfirm.php">
    <div class="menu-items">
      <!--foreachをhtmlに埋め込む方法-->
      <!--endforeachを使用する-->
      <!--foreachの{を:、}をendforeachと記述し、その中に処理内容を書く-->
      <!--if,for,while,switchも同様、endifやendforなど書くことが出来る-->
      <!--配列$menusの要素を変数$menuとするforeach文を書いてください -->
      <?php foreach ($menus as $menu) : ?>
        <div class="menu-item">
      <!--画像を表示する方法-->
      <!--""で囲むこと、echoで出力することが必要-->    
      <!--<img>タグのsrc属性に、$menuのimageプロパティを表示する-->
      <!--imageプロパティはprivate権限なので、ゲッター(getImage)を使う-->
        <img src="<?php echo $menu -> getImage ?>">
      <!--nameプロパティはprivate権限なので、ゲッター(getName)を使う-->  
        <h3 class="menu-item-name"><?php echo $menu -> getName() ?></h3>
      <!--価格を表示する方法-->  
      <!--$menuのgetTaxIncludedPriceメソッドの戻り値を表示する-->
        <p class="price">¥<?php echo $menu -> getTaxIncludedPrice() ?>（税込）</p>
      <!-- <input>タグを用いて入力ボックスを作成してください  -->
      <!--value属性に初期値を設定することができる-->
      <!--name属性に、$menuのゲッターを用いてnameプロパティを表示する-->
      <input type="text" value="0" name="<?php echo $menu -> getName() ?>">  
      <!-- $menuのゲッターを用いてorderCountプロパティを表示してください -->
      <!-- <p>注文数: <?php echo $menu -> getOrderCount() ?></p>  -->
        <span>個</span> 
    </div>
      <?php endforeach ?>
    </div>
      <!-- <input>タグを用いて送信ボタンを作成してください  -->
      <input type="submit" value="注文する">
  </div>
    </form> 
</body>
</html>
