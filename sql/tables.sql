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
