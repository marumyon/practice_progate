<?php 
//.phpでphp以外のコードを書かない場合、閉じタグ不要
//ターミナルで「php 実行したいファイル名」で確認できる
//PHP_EOLは改行を表す
// echo 'Hello World' . PHP_EOL;
//コマンドプロンプトでディレクトリに移動して「code .」でvscodeが開く

//だーよこの問題
// if ($dyce === 1 || $dyce === 2) {
//     echo $dyce . 'は凶です。';
// } elseif ($dyce === 3 || $dyce === 4 || $dyce === 5) {
//     echo $dyce . 'は中吉です。';
// } else {
//     echo $dyce . 'は大吉です。';
// }

//ctrl+/でコメントアウトできる
//インデントを意識する

// 上記をswitch文へ切り替え
// $dyce = rand(1,6);
//     switch ($dyce) {
//       case ($dyce === 1 || $dyce === 2):
//         echo $dyce . 'は凶です。';
//         break;
//       case ($dyce === 3 || $dyce === 4 || $dyce === 5):
//         echo $dyce . 'は中吉です。';
//         break;
//       default:
//         echo $dyce . 'は大吉です。';
//         break;
//      }

// ブラウザで表示するには、ターミナルで「php -S localhost:8000」で表示して、ファイル名を直接URLに入力する
// 変数を確認するとき使える
// var_dump($i);
// exit ;

//3の倍数と3のつく数字の時だけ画像を表示させる
// for ($i = 1; $i <= 40; $i++) {
//     if ($i % 3 === 0) {
//         //htmlタグも使用できる、半角スペースに注意
//         //画像は相対パスで拡張子を必ずつけること
//         echo "<img src='nabeatsu_clearfile.jpg'>";
//         echo '<br>';
//     } else { 
//         echo $i;
//         echo '<br>';
//     } 
// }

//1の段から9の段までforeachを2回使って掛け算の表示(～9/9)
$scores = array(1, 2, 3, 4, 5, 6, 7, 8, 9) ;
$scores2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9) ;
 foreach ($scores as $score) {
     foreach ($scores2 as $score2) {
   echo $score . '×' . $score2 . '=' . $score * $score2 ;
   echo '<br>';
     }
 }

// $scores = array(1, 2, 3, 4, 5, 6, 7, 8, 9) ;
// $score2 = 1 ;
//    while ($score2 = 9) { $soreが9のとき永遠に実行されてしまうから×
//      foreach ($scores as $score) {
//      echo $score . '×' . $score2 . '=' . $score * $score2 ;
//      echo '<br>';
//      $score2++ ;
//      }
//    }
// 

// for($a = 1; $a <=9; $a++){
//     for($i = 1; $i <= 9; $i++){
//         $ans = $a * $i;
//         echo $a.'×'.$i.'='.$ans ;
//         echo '<br>';
//     }
//     echo '<br>';
// }

// $scores = array(1, 2, 3, 4, 5, 6, 7, 8, 9) ;
// $scores2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9) ;
//  foreach ($scores as $score) {
//     foreach ($scores2 as $score2) {
//         $ans = $score * $score2 ;
//         echo $score. "×" .$score2. "=" .$ans ;
//         echo "<br>" ;
//     }    
//  }

?>   
 