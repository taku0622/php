<?php
print("PHPを勉強中です!\n");
print('takumi');
print("現在は" . date("G-i-s") . "\n");
print("今日は" . date("Y年 n月 j日") . "です\n");
$today = new DateTime();
print("現在は" . $today->format("G時 i分 s秒") . "\n");
$sum = 100 + 1050 + 200;
?>
合計金額は：<?php print($sum); ?>円です<br>
税込金額は：<?php print($sum * 1.08); ?>円です
<?php
// for ($i = 1; $i <= 365; $i++) {
//   print($i . "\n");
// }
// $i = 0;
// while ($i <= 365) {
//   print($i . "\n");
//   $i++;
// }
// for ($i = 100; $i > 0; $i -= 2) {
//   print($i . "\n");
// }
// echo "=======================\n";
// $i = 100;
// while ($i > 0) {
//   print($i . "\n");
//   $i -= 2;
// }
