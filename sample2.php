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
<br>
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
<br>
<?php
//arrayで配列すると変数に複数入れられる
$colors = array("赤","青","黄");
echo $colors[0];
//[]で末尾に値を追加できる、[3]のように指定もできる
$colors[] = "白";
echo $colors[3];
?>
<br>
<?php
//番号ではなく、文字列で管理できる連想配列
$scores = array(
  "数学" => 70,
  "英語" => 90,
  "国語" => 80,
   );
 //値を追加するときは、+= 
$scores["国語"] += 5;
echo $scores["国語"];
?>
<br>
<?php
//for文
//繰り返し処理！！$iが100を超えるまで処理は続くよ
for ($i = 51; $i <= 100; $i++){
  //echoを改行する↓
  echo $i ;
  echo "<br>" ;
}
?>
<?php
//while文
//()の中がtrueの限り処理は続くよ
　　　　//ループの条件
      $i = 2;
 while ($i <= 100) {
   　//繰り返す処理
      if ($i % 2 == 0) {
        echo $i;
        echo "<br>" ;
      }
     //変数の更新
      $i++;
    }
?>
<br>
<?php
//break文
//ループそのものを辞める
for ($i = 1; $i <= 1000; $i++) {
      if ($i > 500) {
　　　//もし501になったら処理終了
        break;
      }
      echo $i;
      echo "<br>";
    }
?>
<br>
 <?php
//continue文
//その周だけ抜けて、ループ自体は続ける
for ($i = 1; $i <=1000; $i++){
  if ($i % 3 == 0){
    continue;
  }
  echo $i;
  echo "<br>";
}
?>
<br>
<?php
    $scores = array(
      '数学' => 70,
      '英語' => 90,
      '国語' => 80);
    //foreach文
    //配列に対して、先頭から順に値を取り出す
      foreach ($scores as $key => $value) {
        echo $key ."は". $value ."点です。";                   
      }
  ?>
<br>
<?php
//phpには便利な組み込み関数がある
//()の中を引数と呼び、関数も入れられる
$str = 'progate';
//strlenは文字数を返す
echo strlen($str);
echo '<br>';

$array = array('HTML', 'CSS', 'PHP');
//countは要素数を返す
echo count($array);
echo '<br>';

<<<<<<< Updated upstream
=======
// randはランダムの数字(乱数)を返す、毎回値は異なる
echo rand(1,15);
?>
<br>
<?php
//自分で関数を作成できる
//関数の定義からの関数の呼び出し
//function 関数名()で定義
function hello() {
  echo "Hello, world!";
}
//関数名();で呼び出し
hello();

//function 関数名(仮引数)、仮引数が複数のときは「,」で区切る
function printRectangleArea($height,$width) {
    echo $height*$width;
}
//引数を(5, 10)としてprintRectangleAreaを呼び出す
printRectangleArea(5,10);
?>
<br>
<?php
//戻り値(関数の処理結果)を返すreturn文
//関数getCircleAreaを定義する、
function getCircleArea($radius){
  return $radius * $radius * 3;
}
//関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入する
$circleArea = getCircleArea(5);
//$circleAreaをechoする
echo $circleArea;
?>
<br>
<?php
//フォームはHTMLに書く
//actionにはデータを渡す先のURL、methodはgetかpost
//送信される値が表示されるのはget、されないのはpost
<form action = "sent.php" method = "post">
//ここにフォーム内容 
<div class="form-item">名前</div>
//input type = "text"でテキストボックスができる
//name属性で入力データに名前をつける
//終了タグ不要
<input type = "text" name = "name">

<div class="form-item">内容</div>
//改行を含むテキストボックスはtextareaを使用
<textarea name = "body"></textarea>
      
</form>





?>



>>>>>>> Stashed changes
</body>
</html>