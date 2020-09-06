SELECT *
FROM items;

INSERT INTO items
SET ID
=100, name="商品100";

CREATE TABLE my_items
(
  id INT,
  item_name TEXT,
  price INT
);

INSERT INTO my_items
SET id
=1, item_name="いちご", price=200;

UPDATE my_items SET price=180
WHERE id=1;

DELETE FROM my_items WHERE id=1;

INSERT INTO my_items
SET id
=1, item_name="いちご", price=180;

SELECT id, item_name
FROM my_items
WHERE id=1;

SELECT *
FROM my_items
WHERE id=1;

-- c12
UPDATE my_items SET item_name="いちご",price=180
WHERE id=1;

INSERT INTO my_items
SET item_name
="りんご", price=90;

INSERT INTO my_items
SET item_name
="バナナ", price=120;

INSERT INTO my_items
SET item_name
="ブルーベリー", price=220;

UPDATE my_items SET price=200
WHERE item_name="ブルーベリー";

-- c14
SELECT *
FROM my_items
WHERE price=180;

SELECT *
FROM my_items
WHERE item_name = "いちご";

SELECT *
FROM my_items
WHERE price < 180;

SELECT *
FROM my_items
WHERE price<180;

SELECT *
FROM my_items
WHERE price<=180;

SELECT *
FROM my_items
WHERE price>=180;

SELECT *
FROM my_items
WHERE id<>1;

SELECT *
FROM my_items
WHERE keyword LIKE "%甘い%";

SELECT *
FROM my_items
WHERE keyword LIKE "赤い%";

SELECT *
FROM my_items
WHERE price>=50 AND price<150;

SELECT *
FROM my_items
WHERE id=1 OR id=3;

SELECT *
FROM my_items
WHERE (id=1 OR id=3) AND price<150 AND keyword LIKE "%甘い%";

-- c15
SELECT *
FROM my_items;

SELECT *
FROM my_items
ORDER BY id ASC;

SELECT *
FROM my_items
ORDER BY id DESC;

SELECT *
FROM my_items
WHERE price<= 180
ORDER BY price;

UPDATE my_items SET sales = 20
WHERE id = 1;

UPDATE my_items SET sales = 20
WHERE id = 2;

UPDATE my_items SET sales = 16
WHERE id = 3;

UPDATE my_items SET sales = 8
WHERE id = 4;

-- c16
UPDATE my_items SET created="2018-01-01";

UPDATE my_items SET created=now() WHERE id=2;

UPDATE my_items SET created=now() WHERE id=4

-- c17
SELECT SUM(price)
FROM my_items;

SELECT MAX(price)
FROM my_items;

SELECT MIN(price)
FROM my_items;

SELECT COUNT(id)
FROM my_items;

SELECT AVG(price)
FROM my_items;

-- c18
INSERT INTO makers
SET name
="山田さん", address="東京都港区", tel="000-111-2222";
INSERT INTO makers
SET name
="齊藤さん", address="北海道小樽市", tel="111-222-3333";
INSERT INTO makers
SET name
="川上さん", address="神奈川県横浜市", tel="222-333-4444";

UPDATE my_items SET maker_id=1 WHERE id=1 OR id = 3;

UPDATE my_items SET maker_id=2 WHERE id=2;

UPDATE my_items SET maker_id=3 WHERE id=4;

SELECT maker_id
FROM my_items
WHERE id=1;
SELECT *
FROM makers
WHERE id=1;

SELECT *
FROM makers, my_items
WHERE my_items.id=1 AND makers.id = my_items.maker_id;

SELECT *
FROM makers, my_items
WHERE makers.id = my_items.maker_id;

-- テーブル名の省略
SELECT *
FROM makers m, my_items i
WHERE i.id=1 AND m.id = i.maker_id;

-- c19
INSERT INTO carts
SET item_id
=1,count=5;
INSERT INTO carts
SET item_id
=2,count=3;
INSERT INTO carts
SET item_id
=3,count=1;
INSERT INTO carts
SET item_id
=1,count=3;
INSERT INTO carts
SET item_id
=3,count=2;
INSERT INTO carts
SET item_id
=1,count=2;

SELECT my_items.item_name, carts.count
FROM my_items, carts
WHERE my_items.id = carts.item_id;

SELECT SUM(count)
FROM carts;

SELECT item_id, SUM(count)
FROM carts
GROUP BY item_id;

SELECT i.item_name, SUM(c.count)
FROM my_items i, carts c
WHERE i.id = c.item_id
GROUP BY c.item_id;

-- 20
SELECT i.item_name, SUM(count)
FROM my_items i LEFT JOIN carts c ON i.id=c.item_id
GROUP BY i.id;

SELECT my_items.item_name, COUNT(carts.item_id), SUM(carts.count)
FROM my_items
  LEFT JOIN carts
  ON my_items.id = carts.item_id
GROUP BY my_items.id

-- 21
SELECT item_id
FROM carts;
SELECT DISTINCT(item_id)
FROM carts;

SELECT *
FROM my_items
WHERE price>=50
  AND price<150;
SELECT *
FROM my_items
WHERE price BETWEEN 50 AND 149;

SELECT *
FROM my_items
WHERE id=1 OR id=3;
SELECT *
FROM my_items
WHERE id IN (1,3);

SELECT *
FROM carts
LIMIT
2;

SELECT *
FROM carts
LIMIT
1,2;

SELECT i.item_name, SUM(c.count)
FROM my_items i, carts c
WHERE i.id = c.item_id
GROUP BY c.item_id;
SELECT i.item_name, SUM(c.count) AS sales_count
FROM my_items i, carts c
WHERE i.id = c.item_id
GROUP BY c.item_id;

SELECT m.name, i.item_name, SUM(c.count) AS sales_count
FROM makers m, my_items i
  LEFT JOIN carts c
  ON i.id=c.item_id
WHERE m.id=i.maker_id
GROUP BY c.item_id
ORDER BY sales_count DESC;