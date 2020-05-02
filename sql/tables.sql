--The code in here will deal with the sql tables for this project

CREATE TABLE projects (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  githubURL VARCHAR(255) NOT NULL,
  videoLink VARCHAR(255) NOT NULL,
);
