<?php
class Review {
  private $menuName;
  // $userNameを$userIdに書き換えてください
  private $userId;
  private $body;

  // 引数の$userNameを$userIdに書き換えてください
  public function __construct($menuName, $userId, $body) {
    $this->menuName = $menuName;
    //userNameプロパティに引数の$userNameを代入
    // userNameをuserIdに書き換えてください
    $this->userId = $userId;
    $this->body = $body;
  }

  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }
  
  //Reviewインスタンスが、そのインスタンスに関するUserインスタンスを取得できるようにする
  //reviewとuserの紐づけ
  public function getUser($users) {
    //$usersの各要素を変数$userとする
    foreach ($users as $user) {
      //foreachの中で、$userのidプロパティとインスタンス自身（$this）のuseridプロパティを比較
      // $userのidプロパティと、インスタンス自身のuserIdプロパティを比べるように書き換えてください
      if ($user->getId() == $this->userId) {
        //同じ値ならその$userをreturnする
        return $user;
      }
    }
  }
  
}

?>