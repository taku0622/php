<?php
$fruit = "りんご";
echo $fruit;
?>

<?php
$sum = 8 + 9;
echo $sum;
?>

<?php

$x = 5;
$y = 2;
$a = 8;
$b = 4;

?>

<?php
$x += 10;
echo $x;
?>

<br>

<?php
$y *= 5;
echo $y;
?>

<br>

<?php
$a++;
echo $a;
?>

<?php
$name = 'にんじゃわんこ';
// 'こんにちは！'という文字列と$nameを連結してechoしてください
echo "こんにちは！{$name}";
?>

<?php

$x = 99 * 99;
$y = 77 * 77;

// ここにif文を書いていきましょう

if ($x > 9800) {
  echo "変数xは9800より大きいです。";
}
if ($y > 6000) {
  echo "変数yは6000より大きいです。";
}
?>

<?php
// $ageという変数に自分の年齢を代入してください
$age = 22;
if ($age >= 30) {
  echo "あなたは30歳以上です。";
} else {
  echo "あなたは30歳未満です。";
}
?>
<?php

$x = 1071;

// 以下にif-elseif-else文を書いてください
if ($x % 3 == 0 && $x % 7 == 0) {
  echo "xは3の倍数かつ7の倍数です。";
} elseif ($x % 3 == 0) {
  echo "xは3の倍数ですが7の倍数ではありません。";
} elseif ($x % 7 == 0) {
  echo "xは7の倍数ですが3の倍数ではありません。";
} else {
  echo "xは7の倍数でも3の倍数でもありません。";
}

?>

<?php
$num = 7;
$remainder = $num % 3;
switch ($remainder) {
  case 0:
    echo "大吉です。";
    break;
  case 1:
    echo "中吉です。";
    break;
  case 2:
    echo "小吉です。";
    break;
  default:
    echo "凶です。";
    break;
}
?>

<?php
// この下に配列を作ってください
$colors = array("赤", "青", "黄");
echo $colors[0];
$colors[] = "白";
echo $colors[3]
?>

<?php
// 連想配列
// この下に連想配列を作ってください
$scores = array("数学" => 70, "英語" => 90, "国語" => 80);
$scores["国語"] += 5;
echo $scores["国語"];
?>

<?php

// この下にfor文を書いてください
for ($i = 51; $i < 101; $i++) {
  echo $i . '<br>';
}

?>

<?php

// 変数$iを定義してください
$i = 2;

// while文を書いてください
while ($i < 101) {
  echo $i . '<br>';
  $i += 2;
}
?>
<?php

// この下にfor文を書いてください
for ($i = 1; $i < 1001; $i++) {
  if ($i > 500) {
    break;
  }
  echo $i . '<br>';
}

?>

<?php

// この下にfor文を書いてください
for ($i = 1; $i < 1001; $i++) {
  if ($i % 3 == 0) {
    continue;
  }
  echo $i . '<br>';
}

?>
<?php

$scores = array('数学' => 70, '英語' => 90, '国語' => 80);

// この下にforeach文を書いてください
foreach ($scores as $key => $value) {
  echo "{$key}は{$value}点です。";
}

?>

<?php

$str = 'progate';

// strlenを用いて$strの長さをechoしてください
echo strlen($str);

echo '<br>';

$array = array('HTML', 'CSS', 'PHP');

// countを用いて$arrayの要素数をechoしてください
echo count($array);

echo '<br>';

// randを用いて10から15までのランダムな数字をechoしてください
echo rand(10, 15);

?>
<?php

// 関数helloを定義してください
function hello()
{
  echo "Hello, world!";
}

// 関数helloを呼び出してください
hello();

echo '<br>';
// 関数printRectangleAreaを定義してください
function printRectangleArea($height, $width)
{
  echo $height * $width;
}

// 引数を(5, 10)としてprintRectangleAreaを呼び出してください
printRectangleArea(5, 10);

?>

<?php

// 関数getCircleAreaを定義してください
function getCircleArea($radius)
{
  return $radius * $radius * 3;
}

// 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
$circleArea = getCircleArea(5);

// $circleAreaをechoしてください
echo $circleArea;

?>
<form action="sent.php" method="post">

</form>

<form method="post" action="sent.php">
  <div class="form-item">名前</div>
  <!-- この下にinputタグを書いていきましょう -->
  <input type="text" name="name">

  <div class="form-item">内容</div>
  <!-- この下にtextareaタグを書いていきましょう -->
  <textarea name="body"></textarea>

</form>

<?php
echo $_POST['name'];
?>
<div class="form-item">■ 内容</div>
<!-- bodyを受け取りechoしましょう -->
<?php
echo $_POST['body'];
?>

<select name="age">
  <option value="未選択">選択してください</option>
  <option value="20代">20代</option>
  <option value="30代">30代</option>
</select>