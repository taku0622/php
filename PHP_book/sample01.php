<?php
print("PHPを勉強中です!\n");
print('takumi');
print("現在は" . date("G-i-s") . "\n");
print("今日は" . date("Y年 n月 j日") . "です\n");
$today = new DateTime();
print("現在は" . $today->format("G時 i分 s秒") . "\n");
