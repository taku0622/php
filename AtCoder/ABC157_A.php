<?php
# 入力部
// fscanf(STDIN, "%s", $s);
// fscanf(STDIN, "%d %d", $n, $m);
// $s1 = fgets(STDIN); //"\n"の2文字
// $s2 = fgets(STDIN);
fscanf(STDIN, "%d", $n);
// fscanf(STDIN, "%s", $s);
// fscanf(STDIN, "%s", $s2);

# 処理部
// $arr = str_split($s);
// $arr2 = str_split($s2);
// $arr1 = explode(" ", $s1);
// $arr2 = explode(" ", $s2);
// for ($i = 0; $n > $x * $i; $i++) {
// }
// if (strpos($s, 'RRR') !== false) {
//   $r = 3;
// } elseif (strpos($s, 'RR') !== false) {
//   $r = 2;
// } elseif (strpos($s, 'R') !== false) {
//   $r = 1;
// } else {
//   $r = 0;
// }
// $s = "No";
// if ($x >= 30) {
//   $s = "Yes";
// }
// for ($i = 0; $i * 1000 < $n; $i++) {
// }
// $c = "a";
// if (ctype_upper($a)) {
//   $c = "A";
// }
// $s = "Yes";
// echo count($arr1);
// for ($i = 0; $i < strlen($s1); $i++) {
//   if ($arr1[$i] != $arr2[$i]) {
//     $s = "No";
//   }
// }
// $unit;
// switch ($n % 10) {
//   case 0:
//   case 1:
//   case 6:
//   case 8:
//     $unit = "pon";
//     break;
//   case 3:
//     $unit = "bon";
//     break;
//   default:
//     $unit = "hon";
//     break;
// }
// if ($s == "ABC") {
//   $r = "ARC";
// } else {
//   $r = "ABC";
// }
// $r = "NG";
// for ($i = $a; $i <= $b; $i++) {
//   if ($i % $k == 0) {
//     $r = "OK";
//   }
// }
// $r = "safe";
// if ($s <= $w) {
//   $r = "unsafe";
// }
// $r = "No";
// if (strpos($n, "7") !== false) {
//   $r = "Yes";
// }
// $r = "No";
// if ($arr[2] == $arr[3] && $arr[4] == $arr[5]) {
//   $r = "Yes";
// }
// $r = "Yes";
// if ($s == "AAA" || $s == "BBB") {
//   $r = "No";
// }
if ($n % 2 == 0) {
  $r = $n / 2;
} else {
  $r = ($n + 1) / 2;
}


# 出力部
// echo ($n * ($n - 1) / 2) + ($m * ($m - 1) / 2) . "\n";
// echo $z . " " . $x . " " . $y . "\n";
// echo ($i * 1000) - $n . "\n";
echo $r . "\n";
