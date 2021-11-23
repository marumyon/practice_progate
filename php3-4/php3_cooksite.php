<?php
require_once('php3_cookdata.php');
// menu.phpを読み込んでください
require_once('php3_cookmenu.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="php3_cooksite.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <!-- Menuクラスのクラスプロパティ$countを表示してください -->
    <!-- Menuクラスに対してgetCountメソッドを呼び出して、クラスプロパティ$countを表示してください -->
    <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
    <form method="post" action="php3_cookconfirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <!--リンク作成-->
              <!--クエリ情報-->
              <!--詳細ページに飛ぶためのリンクを<a>タグを用いて作成-->
              <!--$menu->getName()によってnameプロパティを表示している部分を、<a>タグで囲む-->  
              <!--どのshow.phpを表示するかの情報を渡す必要がある-->
              <!--URLの末尾の「?」以降に「キー名=値」の形で簡単な情報をのせることができる-->
              <!--これをクエリ情報という-->
              <!--nameのクエリ情報を追加してください -->
              <a href="php4_cookshow.php?name=<?php echo $menu->getName() ?>">
              <?php echo $menu->getName() ?>
              </a>
            </h3>
            <!--インスタンス instanceof クラス名-->
            <!--あるインスタンスが特定のクラスのインスタンスであるかどうか判別することができる-->
            <!--インスタンスが指定したクラスのインスタンスである場合は「true」に、そうでない場合は「false」を表す-->
            <!-- if文を用いて、$menuがDrinkクラスのインスタンスである時だけgetTypeメソッドを呼び出すようにしてください -->
            <?php if ($menu instanceof Drink): ?>
            <!-- $menuのゲッターを用いてtypeプロパティを表示してください -->
            <p class="menu-item-type"><?php echo $menu->getType() ?></p>
            <!-- elseを追加するときは：を使用する-->
            <?php else : ?>
            <!--辛さの数だけ唐辛子の画像を表示する-->
            <!--spicinessプロパティの数だけ繰り返し処理を行う-->  
            <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
            <img src = "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class = "icon-spiciness" >
            <?php endfor ?>
            <?php endif ?>
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
