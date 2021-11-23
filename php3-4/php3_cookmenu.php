<?php
class Menu {
  protected $name;
  protected $price;
  protected $image;
  private $orderCount = 0;
  //インスタンスの数を数えたいときは、クラス全体で管理するので、
  //クラスプロパティを使用する
  //staticをつける
  //クラス名::$クラスプロパティ名でアクセスできる
  //親クラスのprivateには子クラスからもアクセスできないので、
  //protectedで継承している子クラスのみからアクセスできる
  protected static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
     //クラス内でクラスプロパティにアクセスするときはselfをつける
     //self::$クラスプロパティ名
     //インスタンスが生成される度にcountの値に1を足す
     self::$count++;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  //特定のレビューだけを表示したい
  // getReviewsメソッドを定義してください
  public function getReviews($reviews) {
    //空の配列を設定する
    $reviewsForMenu = array();
    foreach ($reviews as $review) {
      //$reviewのmenuNameプロパティと、インスタンス自身($this)のnameプロパティを比較する
      if ($review->getMenuName() == $this->name) {
        //上記の比較がtrueであるなら、$reviewsForMenuに$reviewを追加する
        $reviewsForMenu[] = $review;
      }
    }
    //foreach文が終了した後、$reviewsForMenuをreturnする
    return $reviewsForMenu;
  }

   //個々のインスタンスのデータに関係ない処理を行いたい時には「クラスメソッド」を使用する
   //呼び出しはクラス名::クラスメソッド名
   public static function getCount() {
    return self::$count;
  }

    
    public static function findByName($menus, $name) {
      //$menusの各要素を変数$menuとする
      foreach ($menus as $menu) {
        //$menuのnameプロパティと引数の$nameを比較
        if ($menu->getName() == $name) {
          //同じ値ならその$menuをreturn
          return $menu;
        }
      }
    }
  
}
?>