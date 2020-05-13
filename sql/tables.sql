--The code in here will deal with the sql tables for this project

--Creating the projects database
DROP DATABASE IF EXISTS mikesPage;
CREATE DATABASE mikesPage;
USE mikesPage;

--Projects Table
CREATE TABLE projects (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  githubURL VARCHAR(255) NOT NULL,
  videoLink VARCHAR(255) NOT NULL,
);

-- First Entry
-- video_games
-- https://github.com/ravenusmc/video_games
-- https://www.youtube.com/embed/bIpUajQqlSU


INSERT INTO projects (title, githubURL, videoLink) VALUES
("video_games", "https://github.com/ravenusmc/video_games", "https://www.youtube.com/embed/bIpUajQqlSU");

INSERT INTO projects (title, githubURL, videoLink) VALUES
("U.S. Terror", "https://github.com/ravenusmc/US_terror", "https://www.youtube.com/watch?v=utJQZTrWIoY")
("Police Shooting", "https://github.com/ravenusmc/police_shootings", "https://www.youtube.com/watch?v=Li4tHJ2Kjbs");

SELECT * FROM `projects` WHERE id = 2 https://www.youtube.com/embed/utJQZTrWIoY

UPDATE projects
SET videoLink = "https://www.youtube.com/embed/Li4tHJ2Kjbs"
WHERE id = 3;

INSERT INTO projects (title, githubURL, videoLink) VALUES
("Terror Flask", "https://github.com/ravenusmc/terror_flask", "https://www.youtube.com/embed/LhmisDsbPXY"),
("Learn One", "https://github.com/ravenusmc/learn_one", "https://www.youtube.com/embed/iXR_q-gyJfg"),
("World Info", "https://github.com/ravenusmc/world_info", "https://www.youtube.com/embed/IJjq8jpU2js");
