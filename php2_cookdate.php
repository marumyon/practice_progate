<?php
//データを定義するコード
//Menuクラスを使用しているのでphp2_cookmenu.phpを読み込む
require_once ('php2_cookmenu.php');

$juice = new Menu('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
$coffee = new Menu('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
$curry = new Menu('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
$pasta = new Menu('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入してください
$menus = array($juice,$coffee,$curry,$pasta);
?>
