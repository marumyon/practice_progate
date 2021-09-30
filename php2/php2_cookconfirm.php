<!-- ここでdata.phpを読み込んでください  -->
<?php require_once ('php2_cookdata.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <!-- 変数$totalPaymentを定義し、数値の0を代入してください -->
    <?php $totalPayment = 0 ?>
    <?php foreach ($menus as $menu): ?>
      <!-- 変数$orderCountに$_POSTで受け取った値を代入してください -->
      <?php $orderCount = $_POST[$menu->getName()]; 
      // $menuに対して、$orderCountを引数としてsetOrderCountメソッドを呼び出してください
        $menu->setOrderCount($orderCount);
      // $totalPaymentに、$menuのgetTotalPriceメソッドで得た値を足してください
        $totalPayment += $menu->getTotalPrice();
      ?>  
      <?php ?>
      <p class="order-amount">
        <!-- ここに、$menuのゲッターを用いてnameプロパティを表示してください -->
        <?php echo $menu->getName() ?>
        x
        <!-- ここに、$orderCountを表示してください -->
        <?php echo $orderCount ?>
        個
      </p>
    <?php endforeach ?>
     <!-- $totalPaymentを表示してください -->
     <h3>合計金額: <?php echo $totalPayment ?>円</h3>
  </div>
</body>
</html>