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