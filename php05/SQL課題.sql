1.
SELECT * FROM gs_an_table WHERE id=1 OR id=3 OR id=5;

2.
SELECT * FROM gs_an_table WHERE id>=4 AND id<=8;

3.
SELECT * FROM gs_an_table WHERE email LIKE 'test1%';

4.
SELECT * FROM gs_an_table ORDER BY indate DESC;

5.
SELECT * FROM gs_an_table WHERE age=20 AND indate LIKE '2020-06%';

6.
SELECT * FROM gs_an_table ORDER BY id DESC LIMIT 5;

7.
SELECT age,count(age) FROM gs_an_table GROUP BY age;
