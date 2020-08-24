<?php
echo "Hello, PHP";
echo "<br>";
echo "10 + 7";
?>
<?php
$name = 'Tom';
echo '変数$nameの値: ' . $name;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo "My name is {$name}"

?>
<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: ' . $price;
echo '<br>';
echo '変数$taxRateの値: ' . $taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$result = $price + $price * $taxRate;
echo "税込価格は{$result}円です";

?>

<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo '変数$moneyの値: ' . $money;
echo '<br>';
echo '変数$priceの値: ' . $price;
echo '<br>';
echo '変数$taxRateの値: ' . $taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$result = $price + $price * $taxRate;
if ($money > $result) {
  echo "商品を買うことができます";
} elseif ($money == $result) {
  echo "商品を買うことができますが、所持金がなくなります";
} else {
  echo "商品を買うことができません";
}
?>

<?php
for ($i = 1; $i < 101; $i++) {
  if ($i % 15 == 0) {
    echo "FizzBuzz";
  } elseif ($i % 3 == 0) {
    echo "Fizz";
  } elseif ($i % 5 == 0) {
    echo "Buzz";
  } else {
    echo $i;
  }
  echo '<br>';
}
?>

<?php
$prices = array(1000, 650, 750, 800);
$sum = 0;
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price . ' ';
  $sum += $price;
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo "合計金額は{$sum}円です";

?>

<?php
$prices = array(1000, 650, 750, 800);
$sum = 0;
$max = 0;
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price . ' ';
  $sum += $price;
  if ($max < $price) {
    $max = $price;
  }
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo "合計金額は{$sum}円です";
echo '<br>';
echo "最高価格は{$max}円です";
?>

<?php
$menu = array('name' => 'CURRY', 'price' => 900);
echo '$menuの値: ';
// var_exportは変数の中身を見るための関数です
var_export($menu);
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo "{$menu['name']}は{$menu['price']}円です"

?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
foreach ($menus as $menu) {
  echo $menu['name'] . 'は' . $menu['price'] . '円です';
  echo '<br>';
}

?>