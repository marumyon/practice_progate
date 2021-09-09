<?php
class Menu {
  //classを定義するファイル
  //カプセル化（使い手に必要のない機能を隠す）してみよう
  //どの機能を使うか分かりやすい、安全
  //クラスのプロパティやメソッドへのアクセス制限のことをいう
  //クラスの外からアクセスするには「public」、制限するには「private」を使用する
  //プロパティの定義は基本的にprivate
  private $name;
  //$priceというプロパティを定義する
  private $price;
  //$imageというプロパティを定義する
  private $image;
  
  public function __construct($name, $price, $image) {
     $this -> name = $name;
    // priceプロパティに引数の$priceを代入する
     $this -> price = $price;
    // imageプロパティに引数の$imageを代入する
     $this -> image = $image;
  }
  
  //privateのとき、クラスの外から値を取り出す方法
  //プロパティの値を取得するためだけのメソッド(ゲッター)が必要
  //public function get***()
  //getプロパティ名が一般的
  //getNameメソッドを定義する
  public function getName() {
    return $this -> name;
  }
  
  //getImageメソッドを定義する
  public function getImage() {
    return $this -> image;
  }

  //メソッドを定義する
  //floor関数を使うと、小数点以下を切り捨てた値が得られる
  //returnとセットで使うと、戻り値として得られる
  public function getTaxIncludedPrice() {
    return floor($this -> price * 1.08);//税込価格
  }
}
?>
  