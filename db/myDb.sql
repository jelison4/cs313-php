CREATE TABLE "users" ("User_ID" SERIAL PRIMARY KEY, "username" varchar, "run_ID" int);
CREATE TABLE "run" ("ID" SERIAL PRIMARY KEY, "game_ID" int, "platform_ID" int, "time" varchar, "valid" boolean);
CREATE TABLE "game" ("ID" SERIAL PRIMARY KEY, "title" varchar, "category_id" int);
CREATE TABLE "category" ("ID" SERIAL PRIMARY KEY, "category_Name" varchar);
CREATE TABLE "platform" ("ID" SERIAL PRIMARY KEY, "name" varchar);

ALTER TABLE "users" ADD FOREIGN KEY ("run_ID") REFERENCES "run" ("ID");
ALTER TABLE "run" ADD FOREIGN KEY ("game_ID") REFERENCES "game" ("ID");
ALTER TABLE "run" ADD FOREIGN KEY ("platform_ID") REFERENCES "platform" ("ID");
ALTER TABLE "game" ADD FOREIGN KEY ("category_id") REFERENCES "category" ("ID");