-- ユーザー全体の平均年齢を取得してください
SELECT AVG(age)
FROM users;

-- 20歳未満の男性ユーザーの、全てのカラムの値を取得してください。
SELECT *
FROM users
WHERE age < 20
  AND gender = 0;

-- ユーザーの年齢ごとの人数と、その年齢を取得してください
SELECT age, COUNT(*)
FROM users
GROUP BY age;

-- 全商品の名前を重複無く取得してください
SELECT DISTINCT(name)
FROM items;

-- 全商品の名前と値段を、値段が高い順に並べてください
SELECT name, price
FROM items
ORDER BY price DESC;

-- 名前の一部に「シャツ」を含む商品の、全てのカラムの値を取得してください
SELECT *
FROM items
WHERE name LIKE "%シャツ%";

-- 全商品の名前、値段、利益を取得してください
SELECT name, price, price - cost
FROM items;

-- 全商品の利益の平均を取得してください
SELECT AVG(price - cost)
FROM items;

-- 各商品あたりの利益が上位5件の商品の名前と利益を取得してください
SELECT name, price-cost
FROM items
ORDER BY price-cost DESC
LIMIT 5;

-- 「グレーパーカー」より値段が高い商品の名前と値段を取得してください
SELECT name
, price
FROM items
WHERE price >
(
  SELECT price
FROM items
WHERE name = "グレーパーカー"
);

-- 7000円以下で「グレーパーカー」より利益が高い商品を取得してください
SELECT name, price - cost
FROM items
WHERE price <= 7000
  AND (price - cost) > (
  SELECT price - cost
  FROM items
  WHERE name = "グレーパーカー"
);

-- 商品ごとに商品のid、売れた個数を取得してください
SELECT item_id, COUNT(*)
FROM sales_records
GROUP BY item_id;

-- 売れた数が多い上位5商品のidと個数を取得してください
SELECT item_id, COUNT(*)
FROM sales_records
GROUP BY item_id
ORDER BY COUNT(*) DESC
LIMIT 5;

-- 売れた数が多い上位5商品のIDと名前、個数を取得してください
SELECT items
.id, items.name, COUNT
(*)
FROM items
  JOIN sales_records
  ON items.id = sales_records.item_id
GROUP BY items.id
ORDER BY COUNT
(*) DESC
LIMIT 5;

-- このサイトの総売上と総利益を取得してください
SELECT SUM(price) AS "総売上", SUM(price - cost) AS "総利益"
FROM items
  JOIN sales_records
  ON items.id = sales_records.item_id

-- 日ごとの販売個数とその日付を取得してください
SELECT purchased_at, COUNT(purchased_at) AS "販売個数"
FROM sales_records
GROUP BY purchased_at
ORDER BY purchased_at ASC;

-- 日ごとの売上額とその日付を取得してください
SELECT sales_records.purchased_at, SUM(items.price) AS "売上額"
FROM sales_records
  JOIN items
  ON items.id = sales_records.item_id
GROUP BY sales_records.purchased_at
ORDER BY sales_records.purchased_at ASC;

-- 10個以上購入したユーザーIDとユーザー名、購入した商品の数を取得してください
SELECT users.id, users.name, COUNT(sales_records.user_id) AS "購入数"
FROM sales_records
  JOIN users
  ON sales_records.user_id = users.id
GROUP BY sales_records.user_id
HAVING COUNT(sales_records.user_id) >= 10

-- 「サンダル」を購入したユーザーのidと名前を取得してください
SELECT users.id, users.name
FROM sales_records
  JOIN users
  ON sales_records.user_id = users.id
  JOIN items
  ON sales_records.item_id = items.id
WHERE items.name = "サンダル"
GROUP BY sales_records.user_id

-- 男性向け、女性向け、男女兼用商品ごとに指定されたデータを取得してください
SELECT items.gender, SUM(items.price) AS "売上額"
FROM items
  JOIN sales_records
  ON items.id = sales_records.item_id
GROUP BY items.gender;

-- 売上額が上位5位の商品の指定されたデータを取得してください
SELECT items.id, items.name, SUM(items.price) AS "売上額"
FROM items
  JOIN sales_records
  ON items.id = sales_records.item_id
GROUP BY items.id
ORDER BY SUM(items.price) DESC
LIMIT 5;

-- グレーパーカーより売上額が高い商品の指定されたデータを取得してください
SELECT items
.id, items.name, SUM
(items.price) AS "売上額"
FROM items
  JOIN sales_records
  ON items.id = sales_records.item_id
GROUP BY items.id
HAVING SUM
(items.price) >
(
  SELECT SUM(items.price)
FROM items
  JOIN sales_records
  ON items.id = sales_records.item_id
WHERE items.name = "グレーパーカー"
)
