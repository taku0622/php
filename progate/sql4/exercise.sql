-- studentsテーブルにデータを追加してください。
INSERT INTO students
  ( name,course)
VALUES( "Kate", "Java");
-- 下記のクエリは消さないでください。
select *
from students;

-- studentsテーブルのidカラムの値が6のレコードをnameをJordanに、courseをHTMLに変更してください。
UPDATE students
SET name = "Jordan", course = "HTML"
WHERE id = 6;
-- 下記のクエリは消さないでください。
SELECT *
FROM students
WHERE id=6;

-- studentsテーブルからidカラムの値が7のレコードを削除してください。
DELETE FROM students
WHERE id = 7;
-- 下記のクエリは消さないでください。
SELECT *
FROM students;

-- studentsテーブルにnameをKaty、courseをHTMLとしたレコードを追加してください。
INSERT INTO students
  (name,course)
VALUES
  ("Katy", "HTML");
-- studentsテーブルのidカラムの値が6のレコードのnameをJuliet、courseをRubyに更新してください。
UPDATE students
SET name = "Juliet", course = "Ruby"
WHERE id = 6;
-- studentsテーブルのidカラムの値が2のレコードを削除してください。
DELETE FROM students
WHERE id = 2;
-- 下記のクエリは消さないでください。
SELECT *
FROM students;
