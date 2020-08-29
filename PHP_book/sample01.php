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
// for ($i = 1; $i <= 365; $i++) {
//   $day = date('n/j(D)', strtotime('+' . $i . 'day'));
//   print($day . "\n");
// }
// $i = 1;
// while ($i <= 365) {
//   $timestamp = strtotime("+" . $i . "day");
//   $day = date("n/j(D)", $timestamp);
//   print($day . "\n");
//   $i++;
// }
$week_name = ["日", "月", "火", "水", "木", "金", "土"];
print("今日は" . $week_name[date("w")] . "曜日です\n");
$ages = ["10代以下", "20代", "30代", "40代", "50代", "60台以上"];
print($ages[1] . "\n");
