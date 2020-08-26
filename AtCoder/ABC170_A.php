<?php
# 入力部
// fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d %d", $a, $b);
// $s = fgets(STDIN);
// fscanf(STDIN, "%d", $n);

# 処理部
$arr = explode(" ", $s);
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
// for ($i = 0; $i < count($arr); $i++) {
//   if ($i + 1 != $arr[$i]) {
//     $r = $i + 1;
//   }
// }

# 出力部
echo $a * $b . "\n";
// echo ($i * 1000) - $n . "\n";