-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Василий', 44, 'Владивосток');
INSERT INTO classmates VALUES (0002, 'Кира', 26, 'Архангельск');
INSERT INTO classmates VALUES (0003, 'Петр', 19, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0004, 'София', 18, 'Владимир');
INSERT INTO classmates VALUES (0005, 'Геннадий', 27, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0006, 'София', 30, 'Москва');
INSERT INTO classmates VALUES (0007, 'Иван', 29, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0008, 'Анна', 47, 'Санкт-Петербург');
INSERT INTO classmates VALUES (0009, 'Алексей', 47, 'Петрозаводск');

-- fetch 
SELECT name FROM classmates WHERE address = 'Санкт-Петербург' AND age >= 18 AND age < 30;
