<?php
# 入力部
// fscanf(STDIN, "%d", $a);
// fscanf(STDIN, "%d %d %d", $n, $x, $t);
// fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%d", $x);

# 処理部
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
$s = "No";
if ($x >= 30) {
  $s = "Yes";
}

# 出力部
// echo $r . "\n";
echo $s . "\n";
