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