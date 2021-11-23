<?php
require_once('menu.php');
require_once('data.php');

//リンクの情報(クエリ情報)を受け取る
//$_GET['キー名']
$menuName = $_GET['name'];
//Menuクラスに対してfindByNameというクラスメソッドを呼び出して
//$menuに代入する
$menu = Menu::findByName($menus, $menuName);
//getReviewsメソッドを呼び出して$menuReviewsに代入する
$menuReviews = $menu->getReviews($reviews);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="review-wrapper">
    <div class="review-menu-item">
      <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
      <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
  
      <?php if ($menu instanceof Drink): ?>
        <p class="menu-item-type"><?php echo $menu->getType() ?></p>
      <?php else: ?>
        <?php for ($i = 0; $i < $menu->getSpiciness(); $i++): ?>
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class='icon-spiciness'>
        <?php endfor ?>
      <?php endif ?>
      <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?></p>
    </div>
    
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class='icon-review'>
          <h4>レビュー一覧</h4>
        </div>
        <!--レビューを表示する-->
        <?php foreach($menuReviews as $review): ?>
          <!--関連したレビューだけを表示したい-->
          <!--それぞれのReviewインスタンスに紐付いているUserインスタンスを取得-->
          <!-- $reviewに対して、引数を$usersとしてgetUserメソッドを呼び出して、戻り値を変数$userに代入してください -->
          <?php $user = $review->getUser($users) ?>
          <div class="review-list-item">
            <div class="review-user">
              <!-- if文を用いて$userのgenderプロパティによって別の画像を表示してください -->
              <?php if ($user->getGender() == 'male'): ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/male.png" class='icon-user'>
              <?php else: ?>
                <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/female.png" class='icon-user'>
              <?php endif ?>
              <!-- <p>タグの中に、$userのゲッターを用いてidプロパティを表示してください -->
              <p><?php echo $user->getId() ?></p>
              <!-- <p>タグの中に、$userのゲッターを用いてnameプロパティを表示してください -->
              <p><?php echo $user->getName() ?></p>
            </div>
            <p class="review-text"><?php echo $review->getBody() ?></p>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <a href="index.php">← メニュー一覧へ</a>
  </div>
</body>
</html>