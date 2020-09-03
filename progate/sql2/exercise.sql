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