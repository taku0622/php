-- 実行ボタンを押し、重複を除かない状態でcharacter_nameカラムのデータを取得してみましょう。

SELECT character_name
FROM purchases;

-- 重複するデータを除いたcharacter_nameカラムのデータを取得してください

SELECT DISTINCT(character_name)
FROM purchases;

-- 重複するデータを除いたnameカラムのデータを取得してください

SELECT DISTINCT(name)
FROM purchases;

-- 「SELECT name, price, 」に追加し、消費税を含んだpriceカラムのデータを取得してください

SELECT name, price, price * 1.08
FROM purchases;

-- character_nameが「にんじゃわんこ」であるpriceカラムのデータの合計を取得してください

SELECT SUM(price)
FROM purchases
WHERE character_name = "にんじゃわんこ";

-- priceカラムの平均を取得してください

SELECT AVG(price)
FROM purchases;

-- character_nameが「にんじゃわんこ」であるpriceカラムのデータの平均を取得してください

SELECT AVG(price)
FROM purchases
WHERE character_name = "にんじゃわんこ"
;

-- purchasesテーブルのnameカラムのデータの数を取得してください

SELECT COUNT(name)
FROM purchases;

-- purchasesテーブルのデータの数を取得してください

SELECT COUNT(*)
FROM purchases;

-- character_nameが「にんじゃわんこ」であるデータの数を取得してください

SELECT COUNT(*)
FROM purchases
WHERE character_name="にんじゃわんこ";

-- もっとも大きいpriceカラムの値を取得してください

SELECT MAX(price)
FROM purchases;

-- もっとも小さいpriceカラムの値を取得してください

SELECT MIN(price)
FROM purchases;

-- character_nameが「にんじゃわんこ」であるレコードの中で、
-- もっとも大きいpriceカラムの値を取得してください

SELECT MAX(price)
FROM purchases
WHERE character_name = "にんじゃわんこ";

-- purchased_atごとの合計金額を取得してください

SELECT SUM(price), purchased_at
FROM purchases
GROUP BY purchased_at;

-- purchased_atごとのお金を使った数を取得してください

SELECT COUNT(price), purchased_at
FROM purchases
GROUP BY purchased_at;

-- purchased_atとcharacter_nameごとの合計金額を取得してください

SELECT SUM(price), purchased_at, character_name
FROM purchases
GROUP BY purchased_at, character_name;

-- purchased_atとcharacter_nameごとにお金を使った回数を取得してください

SELECT COUNT(*), purchased_at, character_name
FROM purchases
GROUP BY purchased_at,character_name;

-- WHEREにcharacter_nameがにんじゃわんこであるデータを指定し、
-- グループ化してください

SELECT SUM(price), purchased_at
FROM purchases
WHERE character_name = "にんじゃわんこ"
GROUP BY purchased_at;

-- WHEREに条件を付け足してcategoryが食費であるデータを
-- purchased_atとcharacter_nameでグループ化してください

SELECT SUM(price), purchased_at, character_name
FROM purchases
WHERE category = "食費"
GROUP BY purchased_at,character_name
;

-- 日付ごとの合計金額のうち、2000円を超えるデータのみを取得してください

SELECT SUM(price), purchased_at
FROM purchases
GROUP BY purchased_at
HAVING SUM(price) > 2000
;

-- 日付とキャラクターごとの合計金額のうち、3000円を超えるデータのみを取得してください

SELECT SUM(price), purchased_at, character_name
FROM purchases
GROUP BY purchased_at,character_name
HAVING SUM(price) > 3000
;

-- categoryでグループ化し、各カテゴリーごとにpriceカラムの合計とcategoryカラムのデータを取得してください

SELECT SUM(price), category
FROM purchases
GROUP BY category
;

-- キャラクターごとにグループ化し、priceカラムの合計と、character_nameを取得してください
-- ただし、WHEREでcategoryが「雑費」であるレコードから集計してください

SELECT SUM(price), character_name
FROM purchases
WHERE category = "雑費"
GROUP BY character_name
;