<?php
class Menu
{
  // name, price, imageプロパティのアクセス権をprotectedに変更してください
  protected $name;
  protected $price;
  protected $image;
  protected $orderCount = 0;
  // countクラスプロパティのアクセス権をprotectedに変更してください
  protected static $count = 0;

  public function __construct($name, $price, $image)
  {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
  }

  public function hello()
  {
    echo '私は' . $this->name . 'です';
  }

  public function getName()
  {
    return $this->name;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function getOrderCount()
  {
    return $this->orderCount;
  }

  public function setOrderCount($orderCount)
  {
    $this->orderCount = $orderCount;
  }

  public function getTaxIncludedPrice()
  {
    return floor($this->price * 1.08);
  }

  public function getTotalPrice()
  {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }

  public static function getCount()
  {
    return self::$count;
  }
}
