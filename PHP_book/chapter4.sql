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