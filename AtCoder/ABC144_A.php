<?php
# 入力部
// fscanf(STDIN, "%s %s", $s, $t);
fscanf(STDIN, "%d %d", $n, $m);
// fscanf(STDIN, "%s", $u);
// fscanf(STDIN, "%d %d", $k, $x);
// $s1 = fgets(STDIN); //"\n"の2文字
// $s2 = fgets(STDIN);
// fscanf(STDIN, "%d", $r);
// fscanf(STDIN, "%d", $b);
// fscanf(STDIN, "%s", $s);
// fscanf(STDIN, "%c", $c);
// fscanf(STDIN, "%s", $s2);
// fscanf(STDIN, "%d %d %d", $a, $b, $c);


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
// $arr = array("SAT", "FRI", "THU", "WED", "TUE", "MON", "SUN");
// for ($i = 0; $i <= count($arr); $i++) {
//   if ($arr[$i] == $s) {
//     break;
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
// if ($n % 2 == 0) {
//   $r = $n / 2;
// } else {
//   $r = ($n + 1) / 2;
// }
// if ($n < 10) {
//   $r += (10 - $n) * 100;
// }
// $arr = array($a, $b, $c);
// $arr = array_unique($arr);
// if (count($arr) == 2) {
//   $r = "Yes";
// } else {
//   $r = "No";
// }
// if ($s == $u) {
//   $a--;
// } else {
//   $b--;
// }
// for ($i = 0; $h > 0; $i++) {
//   $h -= $a;
// }
// $r = "No";
// if ($n == $m) {
//   $r = "Yes";
// }
// $r = "win";
// if ($a + $b + $c >= 22) {
//   $r = "bust
// ";
// }
// $arr = array(1, 2, 3);
// unset($arr[$a - 1]);
// unset($arr[$b - 1]);
// $arr = array_values($arr);
if ($n < 10 && $m < 10) {
  $r = $n * $m;
} else {
  $r = -1;
}

# 出力部
// echo ($n * ($n - 1) / 2) + ($m * ($m - 1) / 2) . "\n";
// echo $z . " " . $x . " " . $y . "\n";
// echo ($i * 1000) - $n . "\n";
// echo json_encode($arr) . "\n";
// echo $arr[0] . "\n";
// echo $i + 1 . "\n";
echo $r . "\n";
// echo ++$c . "\n";
// echo $a . " " . $b . "\n";
// echo $t . $s . "\n";
