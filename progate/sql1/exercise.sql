-- purchasesテーブルから、nameカラムのデータを取得してください

SELECT name
FROM purchases;

-- purchasesテーブルから、priceカラムのデータを取得してください

SELECT price
FROM purchases;

-- purchasesテーブルから、「nameカラム」と「priceカラム」のデータを取得してください

SELECT name, price
FROM purchases;

-- purchasesテーブルから、全てのカラムのデータを取得してください

SELECT *
FROM purchases;

-- 「FROM purchases」のあとにコードを追加し、categoryカラムが「食費」であるデータを取得してください

SELECT *
FROM purchases
WHERE category = "食費";