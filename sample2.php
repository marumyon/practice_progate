<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="sample1-2.css">
</head>
<body>
  //htmlに埋め込むとき<?php～?>の中にphpのコードを書く
<?php
    //echoは出力せよという命令
    echo "Hello, world!";
  ?>
  <br>
  <?php
    // 7 * 2を計算して出力させる
    //""や''で囲むと文字列として認識されるので注意
    echo 7*2
  ?>
  <br>
  <?php
    //割り算の余りも計算できる
    echo 8 % 3
  ?>
  <br>
    //変数は$変数名=代入したい値;で定義
    //数字や日本語から始まったり、ローマ字読みはNG
    //英単語や、二単語以上は二つ目の単語の始まりを大文字にするとよい
   <?php
    echo $fruit="りんご";
  ?>

   <?php
    $name = "にんじゃわんこ";
    // "こんにちは！"という文字列と$nameを連結してechoする
    $name = "こんにちは！{$name}";
    echo $name;
    //「.」記号で文字列と変数などを連結できる
    $name1 = "にんじゃにゃんこ";
    $name1 = "こんにちは".$name1;
    echo $name1;
  ?>
　
　<?php
    $x = 99 * 99;
    $y = 77 * 77;
    // if文は()の内容がtrueのときだけ{}の内容が実行される
    //==等しいとき、!=等しくないとき
    if ($x>9800) {
      echo "変数xは9800より大きいです。";
    }//実行される

    if ($y>6000) {
      echo "変数yは6000より大きいです。";
    }//実行されない   
  ?>
　　<?php
    $age = 26;
    if ($age>=30) {
      echo "あなたは30歳以上です。";
    }
    //falseだった場合、elseの内容が実行される
      else {
        echo "あなたは30歳未満です。";
      }
    ?>
    <?php
    $remainder=2;
    //switchはelseifと同じ使い方
    //&&はand、||はor、!は否定の意味 ex: if($age>30 && $age<45)
     switch ($remainder) {
        case 0:
        echo "大吉です。";
        break;//breakがないと次のcaseにいってしまう
        case 1:
        echo "中吉です。";
        break;
        case 2:
        echo "小吉です。";
        break;
            
        default://どれにも一致しなかった場合
        echo "凶です。";
        break;
    }
?>

<?php
//だーよこの問題
if($dyce === 1 || $dyce === 2){
    echo $dyce . 'は凶です。';
}else if ($dyce === 3 || $dyce === 4 || $dyce === 5){
    echo $dyce . 'は中吉です。';
}else{
    echo $dyce . 'は大吉です。';
}
?>

<?php
//swith文に切り替え(～9/2)
$dyce=rand(1,6);
    switch ($dyce) {
      case ($dyce === 1 || $dyce === 2):
        echo $dyce . 'は凶です。';
        break;
      case ($dyce === 3 || $dyce === 4 || $dyce === 5):
        echo $dyce . 'は中吉です。';
        break;
      default:
        echo $dyce . 'は大吉です。';
        break;
     }
?>


</body>
</html>