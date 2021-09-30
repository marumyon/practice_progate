<?php 
// menu.phpを読み込んでください
require_once('menu.php');


// Menuクラスを継承したDrinkクラスを作成してください
class Drink extends Menu {
// $typeというprivateなプロパティを定義してください
  private $type;

  public function __construct($name, $price, $image, $type) {
       
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