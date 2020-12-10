-- DROP DATABASE if exists facebook;
CREATE DATABASE IF NOT EXISTS facebook;
-- use db
USE facebook;
-- drop table users;
-- drop table posts;
-- create the users table
CREATE TABLE IF NOT EXISTS USERS( id INT ( 11 ) PRIMARY KEY auto_increment,
                                  username VARCHAR ( 255 ) UNIQUE NOT NULL,
                                  name VARCHAR ( 255 ),
                                  pass VARCHAR ( 255 ),
                                  email TEXT );
-- create the posts table
CREATE TABLE IF NOT EXISTS POSTS( id INT ( 11 ) PRIMARY KEY auto_increment,
                                  time_made timestamp,
                                  user_name varchar ( 255 ) NOT NULL,
                                  content TEXT,
                                  FOREIGN KEY ( user_name ) REFERENCES USERS(username) ON DELETE CASCADE );
-- insert some dummy data
INSERT INTO USERS(username, name, pass, email)
VALUES ( 'test', ( SELECT COUNT(*) ), '1', NULL );
-- insert dummy post
INSERT INTO POSTS(user_id, content)
VALUES ( ( SELECT id FROM users ORDER BY id DESC LIMIT 1 ), 'my first post' );
-- show the users and thier posts and the time they were made
SELECT users.*,
       posts.content,
       DATE_FORMAT(posts.time_made, '%W, %d/%M/%Y') AS TIME
FROM users
     INNER JOIN posts AS posts ON posts.user_id = users.id;
-- count
SELECT users.name,
       COUNT(posts.id) AS count
FROM posts
     INNER JOIN users ON users.id = posts.user_id
                         AND users.name LIKE 'a'
GROUP BY users.name;
-- user names and their post count
SELECT users.id AS id,
       users.name AS name,
       COUNT(posts.id) AS count
FROM users
     INNER JOIN posts AS posts ON posts.user_id = users.id
GROUP BY users.name;
-- user names and their post count
SELECT users.name AS name,
       COUNT(posts.id) AS count
FROM users
     INNER JOIN posts AS posts ON posts.user_id = users.id
GROUP BY users.name;
-- test
SELECT posts.user_id
FROM posts
     INNER JOIN users ON users.id = posts.user_id
                         AND users.username = 's';
-- help
SELECT *
FROM users
WHERE username = 'a'
      AND pass = 'a';