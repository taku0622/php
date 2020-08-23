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