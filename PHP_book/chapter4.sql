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