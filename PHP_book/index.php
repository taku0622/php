<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>よくわかるPHPの教科書</title>
</head>

<body>
  <header>
    <h1 class="font-weight-normal">よくわかるPHPの教科書</h1>
  </header>

  <main>
    <h2>Practice</h2>
    <pre>
<?php
/* ここに、PHPのプログラムを記述します */
print("PHPを勉強中です!\n");
print('takumi');
print("\n");
print("I'm stadying");
print("\n");
print('I\'m stadying');
print("\n");
print(60 * 60 * 24 . "\n");
print("現在は" . date("G時 i分 s秒") . "です\n");
print("今日は" . date("Y年 n月 j日") . "です\n");
$sum = 100 + 1050 + 200;
?>
合計金額は：<?php print($sum); ?>円です<br>
税込金額は：<?php print($sum * 1.08); ?>円です
</pre>
  </main>
</body>

</html>