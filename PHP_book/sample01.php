<?php
// session_start();
// $_SESSION["session_message"] = "値をセッションに保存しました";
// $value = "変数に保存した値です";
// setcookie("save_message", "Cookieに保存した値です", time() + 60 * 60 * 24 * 14);
// header('Location: https://h2o-space.com/');
// exit();

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
echo "\n";
$xmlTree = simplexml_load_file("https://h2o-space.com/feed");
foreach ($xmlTree->channel->item as $item) :
?>
  ・<a href="<?php print($item->link); ?>"><?php print($item->title); ?></a>
<?php endforeach;
$file = file_get_contents("https://h2o-space.com/feed/json");
$json = json_decode($file);

foreach ($json->items as $item) :
?>
  ・<a href="<?php print($item->link); ?>"><?php print($item->title); ?></a>
<?php endforeach;
?>
<form action="submit.php" method="get">
  <label for="my_name">お名前：</label>
  <input type="text" id="my_name" maxlength="255" value="">
  <input type="submit" value="送信する">
</form>
<form action="submit.php" method="post">
  <p>性別：<input type="radio" name="gender" value="male"> 男性 ／ <input type="radio" name="gender" value="female"> 女性</p>
  <input type="submit" value="送信する">
</form>
<p>ご予約希望日（複数選択可）</p>

<p>
  <input type="checkbox" name="reserve[]" value="1/1"> 1月 1日<br>
  <input type="checkbox" name="reserve[]" value="1/2"> 1月 2日<br>
  <input type="checkbox" name="reserve[]" value="1/3"> 1月 3日<br>
</p>
<input type="submit" value="送信する">
<?php
$age = "３４23";

$age = mb_convert_kana($age, "n", "UTF-8");
if (is_numeric($age)) {
  print($age . "歳");
} else {
  print("※　年齢が数字ではありません");
}
echo "\n";
$zip = "234-6453";

$zip = mb_convert_kana($zip, "a", "UTF-8");
if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
  print("郵便番号： 〒" . $zip);
} else {
  print("※ 郵便番号を 123-456の形式でご記入下さい");
}
echo "\n";
$week = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");
$d = 1;
for ($i = 2; $d < 31; $i++) {
  print("9/" . $d . " (" . $week[$i % 7] . ")\n");
  $d++;
}
$email = "hayatsutkm@gmail.com";
mb_language(('japanese'));
mb_internal_encoding("UTF=8");

$from = "noreply@example.com";
$sub = "phpの教科書";
$body = "このメールはサンプルよ";
$success = mb_send_mail($email, $sub, $body, "from: " . $from);
if ($success) {
  echo "送信できた";
} else {
  echo "送信できませんでした";
}
echo "\n";
$lucky = rand(1, 12);
echo $lucky . "月生まれはラッキーです";
