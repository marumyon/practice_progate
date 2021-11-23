<?php 
// menu.phpを読み込んでください
require_once('menu.php');

//継承
//すでに定義されているクラスのプロパティやメソッドを別のクラスに引き継ぐ
//class 子クラス名　extends 親クラス
//親クラスは子クラスのメソッド等は使えない
//子クラスになければ親クラスのメソッド等を使う仕組み
//Menuクラスを継承したDrinkクラスを作成してください
class Drink extends Menu {
// $typeというprivateなプロパティを定義してください
  private $type;

//__constructメソッドは親クラスですでに定義されていますが、
//同じ名前のメソッドを子クラスで定義するとメソッドの中身を上書きすることができる
//これをオーバーライドという
  public function __construct($name, $price, $image, $type) {
     
    //parent::メソッド名
    //オーバーライドの際に親クラスのメソッドを呼び出したいとき
    // 親クラスのコンストラクタを呼び出してください
    parent::__construct($name, $price, $image);
    
    $this->type = $type;
  }  

// getTypeメソッドを定義してください
  public function getType(){
        return $this->type;
      }
      
// setTypeメソッドを定義してください
  public function setType($type){
        $this->type = $type;
      } 
  
  
  
}

?>