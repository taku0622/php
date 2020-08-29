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
$fruits = [
  "apple " => "りんご",
  "grape " => "ぶどう",
  "lemon " => "レモン",
  "tomato" => "トマト",
  "peach " => "もも"
];
foreach ($fruits as $english => $japanese) {
  print($english . " : " . $japanese . "\n");
}
$os = [
  "win"     => "Windows",
  "mac"     => "Macintosh",
  "iphone"  => "iPhone",
  "ipad"    => "iPad",
  "android" => "Android"
];
foreach ($os as $key => $value) {
  print($key . " :=> " . $value . "\n");
}
if (date("G") < 9) {
  print("※ 現在受付時間外です\n");
} else {
  print("ようこそ\n");
}
$answer = 0;
if ($answer == 0) {
  print("1以上の数字を指定してください\n");
}
?>
3000円のものから、100円値引きした場合は、<?php print(floor(100 / 3000 * 100)); ?>%引きです

■ その他の計算
元の計算式→<?php print(100 / 3000 * 100); ?>

切り上げ (ceil)→<?php print(ceil(100 / 3000 * 100)); ?>

四捨五入 (round)→<?php print(round(100 / 3000 * 100, 1) . "\n"); ?>
<?php
$date = sprintf("%04d年 %02d月 %02d日", 2018, 1, 2);
print($date);
$success = file_put_contents('./news_data/news.txt', '2018-06-01 ホームページをリニューアルしました');
if ($success) {
  print('ファイルへの書き込みが完了しました。');
} else {
  print('書き込みに失敗しました。フォルダの権限などを確認してください');
}
echo "\n";
$news = file_get_contents('./news_data/news.txt');
$news .= "<br/>2018-06-2-02 ニュースを追加しました";
file_put_contents('./news_data/news.txt', $news);

readfile('./news_data/news.txt');
