CREATE TABLE "users" ("User_ID" SERIAL PRIMARY KEY, "username" varchar, "run_ID" int);
CREATE TABLE "run" ("ID" SERIAL PRIMARY KEY, "game_ID" int, "platform_ID" int, "time" varchar, "valid" boolean,  "category_id" int);
CREATE TABLE "game" ("ID" SERIAL PRIMARY KEY, "title" varchar);
CREATE TABLE "category" ("ID" SERIAL PRIMARY KEY, "category_title" varchar);
CREATE TABLE "platform" ("ID" SERIAL PRIMARY KEY, "name" varchar);

ALTER TABLE "users" ADD FOREIGN KEY ("run_ID") REFERENCES "run" ("ID");
ALTER TABLE "run" ADD FOREIGN KEY ("game_ID") REFERENCES "game" ("ID");
ALTER TABLE "run" ADD FOREIGN KEY ("platform_ID") REFERENCES "platform" ("ID");
ALTER TABLE "game" ADD FOREIGN KEY ("category_id") REFERENCES "category" ("ID");

INSERT INTO platform (name) VALUES ('PC');
INSERT INTO platform (name) VALUES ('Playstation 4');
INSERT INTO platform (name) VALUES ('Xbox One');
INSERT INTO platform (name) VALUES ('Nintendo Switch');
INSERT INTO platform (name) VALUES ('Nintendo 64');
INSERT INTO platform (name) VALUES ('Super Nintendo');

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

INSERT INTO category (category_title) VALUES ('100%');
INSERT INTO category (category_title) VALUES ('Any %');