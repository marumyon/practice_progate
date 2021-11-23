<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="php1.css">
</head>
<body>
    <!--htmlに埋め込むとき<?php～?>の中にphpのコードを書く-->
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
    //割り算の余りは%
    echo 8 % 3
  ?>
  <br>
    <!--変数は$変数名=代入したい値;で定義-->
    <!--数字や日本語から始まったり、ローマ字読みはNG-->
    <!--英単語や、二単語以上は二つ目の単語の始まりを大文字にするとよい-->
   <?php
    echo $fruit="りんご";
  ?>
  <br>
    <!--変数に数字を足す-->
  <?php
    //省略形は$X += 10
    $X = 1;
    $X = $X + 10;
    //足す数字が1のときだけ省略できる
    //1引くときは、--$Y
    $Y = 1;
    //echoの前に+1されるから答えは2
    echo ++$Y;
　  //echo $Y++;は、echoの後に+1されるから答えは1
  ?>
  <br>
  <?php
    $name = "にんじゃわんこ";
    // "こんにちは！"という文字列と$nameを連結してechoする
    //この連結方法の際は、必ず""で文字列と認識させること
    $name = "こんにちは！{$name}さん";
    echo $name;
    //「.」記号で文字列と変数などを連結できる
    $name1 = "にんじゃにゃんこ";
    $name1 = "こんにちは".$name1;
    echo $name1;
    //.=で省略もできる
    $name2 = "にんじゃ";
    $name2 .= "わんこ";
    echo $name2;
  ?>
　<br>
　<?php
    //if文
    $x = 99 * 99;
    $y = 77 * 77;
    //if文は()の内容がtrueのときだけ{}の内容が実行される
    //<=は右辺の方が大きいときまたは等しいとき
    //>=は右辺の方が小さいときまたは等しいとき
    //==は等しいとき、!=は等しくないときを表す
    if ($x > 9800) {
      echo "変数xは9800より大きいです。";
    }//実行される
    if ($y > 6000) {
      echo "変数yは6000より大きいです。";
    }//実行されない   
  ?>
  <br>
　<?php
    //else
    //ifの条件がfalseだった場合、else{}が実行される
    $age = 20;
    if ($age >= 30) {
      echo "あなたは30歳以上です。";
    } else {
      echo "あなたは30歳未満です。";
    }
    //elseif
    //もし～だったら、それとも～であれば、いずれでもなければ～の多岐分岐ができる
    //elseifは必要な分岐だけ並べられるが、複数の条件に一致した場合、
    //最初に一致したブロックだけ実行される
    $age1 = 20;
    if ($age1 >= 30) {
      echo "あなたは30歳以上です。";
    } elseif ($age1 >= 20) {
      echo "あなたは30歳以下20歳以上です。";//trueなので実行される
    } else {
      echo "あなたは20歳未満です。";//すでに当てはまる条件があったため実行されない
    }
  ?>
  <br>
　<?php
    //||、&&、!
    //&&はand、||はor、!は否定の意味
    $x = 20;
    if ($x > 10 && $x < 30) {
      echo "$xは10より大きくて、かつ30より小さい";
    }  
    if ($x < 10 || $x > 30) {
      echo "$xは10より小さい、または30より大きい";
    }
    //条件のtrueとfalseが逆になる
    $y = 20;
    if (!($y == 30)) {
      echo "$yは30ではない";
    }
  ?>
  <br>
  <?php
    //switch
    //分岐が多いときは読みやすくなる
    //switchはelseifと同じ使い方
    $remainde = 2;
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
        default://caseのどれにも一致しなかった場合、実行される
        echo "凶です。";
        break;
    }
  ?>
  <br>
  <?php
    //array
    //配列を使うと変数に複数入れられる
    $colors = array("赤","青","黄");
    echo $colors[0];//赤
    //[]を空欄にすると末尾に値を追加できる、[3]のように指定もできる
    $colors[] = "白";
    echo $colors[3];//白
  ?>
  <br>
  <?php
    //連想配列
    //要素の管理はインデックス番号ではなく、「キー」と呼ばれる文字列などの値を指定できる
    $scores = array(
              "数学" => 70,//コンマで区切る
              "英語" => 90,
              "国語" => 80,
              );
    //値を追加するときは、配列名[キー]=値 
    $scores["国語"] += 5;
    //値を取り出すには、配列名[キー]
    echo $scores["国語"];//80
  ?>
  <br>
  <?php
    //for文(繰り返し処理)
    //繰り返す回数が分かっているとき
    //$iが100を超えるまで処理は続くよ
    //for (初期化　ループ条件　変数の更新)　{ループする処理}
    for ($i = 51; $i <= 100; $i++) {
      echo $i ;
      echo "<br>" ;//改行
    }
  ?>
  <?php
    //while文(繰り返し処理)
    //繰り返す回数が分かっていないとき
    //()の中がtrueの限り処理は続くよ
    //無限ループに気を付けよう
    $i = 2;
    while ($i <= 100) {
      if ($i % 2 == 0) {
            echo $i;
            echo "<br>" ;
          }
      $i++;//for文のように自動で変数が更新されないので記入する
    }
  ?>
  <br>
  <?php
    //break文
    //ループそのものを辞める
    for ($i = 1; $i <= 1000; $i++) {
      if ($i > 500) {//もし501になったらループ終了
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
      if ($i % 3 == 0){//3の倍数のときそのループは抜けて、次のループを実行
        continue;
      }
      echo $i;
      echo "<br>";
    }
  ?>
  <br>
  <?php
    //foreach文
    //配列に対して、先頭から順に値を取り出す
    $scores = array(
              '数学' => 70,
              '英語' => 90,
              '国語' => 80
              );
    //foreach (配列名 as 変数) {繰り返したい処理}
    //asの後ろの変数にループの度にデータが先頭から代入されていく
    //foreach (配列名 as キー変数 => 値変数) {繰り返したい処理}で
    //配列のときはインデックス番号、連想配列のときはキーが代入される
    //キー変数は省略可能
    foreach ($scores as $key => $value) {
        echo $key ."は". $value ."点です。　";                   
    }
  ?>
  <br>
  <?php
    //phpには便利な組み込み関数がある
    //()の中を引数と呼び、文字列も関数も入れられる
    //strlen関数は文字数を返す
    $str = 'progate';
        echo strlen($str);//7
        echo '<br>';

    //count関数は要素数を返す    
    $array = array('HTML','CSS','PHP');
        echo count($array);//3
        echo '<br>';

    //rand関数はランダムの数字(乱数)を返す、毎回値は異なる
    echo rand(1,15);
  ?>
  <br>
  <?php
    //functionで関数を作成する
    //自分で関数を作成できる
    //function 関数名() {} で定義
    function hello() {
      echo "Hello, world!";
    }
    //関数名()で呼び出し
    hello();//Hello,world!

    //関数内に、値(引数)を渡してその値を利用することができる
    //()内に、引数を受け取る変数(仮変数)を設定する、複数のときは「,」で区切る
    //function 関数名(仮引数) {}
    function printRectangleArea($height,$width) {
        echo $height * $width;
    }
    //引数を(5, 10)として、printRectangleAreaを呼び出す
    printRectangleArea(5,10);//50
   ?>
   <br>
   <?php
    //return文
    //戻り値(関数の処理結果)を返す
    //関数getCircleAreaを定義する
    function getCircleArea($radius) {
      return $radius * $radius * 3;
    }
    //関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入する
    $circleArea = getCircleArea(5);
    //$circleAreaをechoする
    echo $circleArea;
   ?>
   
</body>
</html>