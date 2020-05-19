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


INSERT INTO projects (title, githubURL, videoLink) VALUES
("Space Adventure", "https://github.com/ravenusmc/space_adventure", "https://www.youtube.com/embed/d7-XMuwyPXk"),
("Inventory", "https://github.com/ravenusmc/inventory", "https://www.youtube.com/embed/Z9piHJlSGtE"),
("Titanic", "https://github.com/ravenusmc/titanic", "https://www.youtube.com/embed/Wp49tI6zCXc"),
("War Deaths", "https://github.com/ravenusmc/war_deaths", "https://www.youtube.com/embed/J5ucQ1v2hxk"),
("News App", "https://github.com/ravenusmc/news_app", "https://www.youtube.com/embed/3csvQETVKqA"),
("Murder Study", "https://github.com/ravenusmc/murder_study", "https://www.youtube.com/embed/3prEmoyck0Y");


INSERT INTO projects (title, githubURL, videoLink) VALUES
("UFO Study", "https://github.com/ravenusmc/ufo_study", "https://www.youtube.com/embed/vzkZq-EPM10"),
("Movies", "https://github.com/ravenusmc/movies", "https://www.youtube.com/embed/H9fcp_4rL_w"),
("Speech Rev", "https://github.com/ravenusmc/speech_rev", "https://www.youtube.com/embed/P1XnZkn5AJw"),
("Book Project", "https://github.com/ravenusmc/book_project", "https://www.youtube.com/embed/B3G0cl_cxAk"),
("Guns", "https://github.com/ravenusmc/guns", "https://www.youtube.com/embed/O5D8NKkDYGI"),
("NASA API", "https://github.com/ravenusmc/user_misc", "https://www.youtube.com/embed/_DIxJRKApOg");




































--
