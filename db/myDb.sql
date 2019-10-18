CREATE TABLE "users" ("id" SERIAL PRIMARY KEY, "username" varchar);
CREATE TABLE "run" ("id" SERIAL PRIMARY KEY, "user_id" int, "game_id" int, "platform_id" int, "time" varchar, "valid" boolean,  "category_id" int);
CREATE TABLE "game" ("id" SERIAL PRIMARY KEY, "title" varchar);
CREATE TABLE "category" ("id" SERIAL PRIMARY KEY, "category_title" varchar);
CREATE TABLE "platform" ("id" SERIAL PRIMARY KEY, "name" varchar);
ALTER TABLE "run" ADD FOREIGN KEY ("user_id") REFERENCES "users" ("id");
ALTER TABLE "run" ADD FOREIGN KEY ("game_id") REFERENCES "game" ("id");
ALTER TABLE "run" ADD FOREIGN KEY ("platform_id") REFERENCES "platform" ("id");
ALTER TABLE "run" ADD FOREIGN KEY ("category_id") REFERENCES "category" ("id");

/* Inserting platforms*/
INSERT INTO platform (name) VALUES ('PC');
INSERT INTO platform (name) VALUES ('Playstation 4');
INSERT INTO platform (name) VALUES ('Xbox One');
INSERT INTO platform (name) VALUES ('Nintendo Switch');
INSERT INTO platform (name) VALUES ('Nintendo 64');
INSERT INTO platform (name) VALUES ('Super Nintendo');

/* Inserting games*/
INSERT INTO game (title) VALUES ('Sekiro');
INSERT INTO game (title) VALUES ('The Legend of Zelda: A Link to the Past');
INSERT INTO game (title) VALUES ('The Legend of Zelda: Ocarina of Time');
INSERT INTO game (title) VALUES ('Super Metroid');
INSERT INTO game (title) VALUES ('Celeste');
INSERT INTO game (title) VALUES ('Hollow Knight');
INSERT INTO game (title) VALUES ('Dead Cells');
INSERT INTO game (title) VALUES ('River City Girls');
INSERT INTO game (title) VALUES ('A Hat in Time');
INSERT INTO game (title) VALUES ('Dark Souls');
INSERT INTO game (title) VALUES ('Dark Souls II');
INSERT INTO game (title) VALUES ('Dark Souls III');
INSERT INTO game (title) VALUES ('Super Mario 64');
INSERT INTO game (title) VALUES ('Trine');
INSERT INTO game (title) VALUES ('Trine 2');
INSERT INTO game (title) VALUES ('Portal');

/* Inserting Users */
INSERT INTO users (username) VALUES ('Cadfel');
INSERT INTO users (username) VALUES ('Distortion2');
INSERT INTO users (username) VALUES ('LilAggy');
INSERT INTO users (username) VALUES ('sTaTic_dr0P');
INSERT INTO users (username) VALUES ('Scooch');
INSERT INTO users (username) VALUES ('FUSTERCLUCK');
INSERT INTO users (username) VALUES ('rtyler91');
INSERT INTO users (username) VALUES ('thefezz');
INSERT INTO users (username) VALUES ('Shorty Da Moose');
INSERT INTO users (username) VALUES ('Alexden96');
INSERT INTO users (username) VALUES ('ScoutATB');
INSERT INTO users (username) VALUES ('Devilteeth');
INSERT INTO users (username) VALUES ('Sacaix');
INSERT INTO users (username) VALUES ('jester1570');

/* Inserting categories*/
INSERT INTO category (category_title) VALUES ('100%');
INSERT INTO category (category_title) VALUES ('Any %');
INSERT INTO category (category_title) VALUES ('All Bosses');
INSERT INTO category (category_title) VALUES ('Glitchless');
INSERT INTO category (category_title) VALUES ('Out of Bounds');

/* Inserting runs*/
INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES (1, 1, 1, '00:21:42', True, 2);
INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES (2, 1, 2, '00:19:55', True, 2);
INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES (4, 4, 6, '01:41:30', True, 1);
INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES (10, 16, 1, '00:16:14', True, 4);
INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES (10, 16, 1, '00:07:46', True, 5);
INSERT INTO run (user_id, game_id, platform_id, time, valid, category_id) VALUES (3, 1, 2, '00:25:35', False, 2);

/* Displaying table with | username | Game | Category | Time | Platform | Validated | */
SELECT users.username, game.title, category.category_title, run.time, platform.name, run.valid FROM users, run, platform, game, category WHERE run.user_id = users.id AND platform_id = platform.id AND run.game_id = game.id AND run.category_id = category.id ORDER BY run.time;

/* Grabing list of game id's and game titles from database with duplicates removed */
SELECT DISTINCT game.title FROM run, game WHERE run.game_id = game.id;