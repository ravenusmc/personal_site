<?php

  class ProjectsDB {

      //This method will search for a game based on a title
      public static function searchForProjects() {

        //global $db;
        $db = Database::getDB();

        $query = 'SELECT * from projects';
        $statement = $db->prepare($query);
        // $statement->bindValue(':title', $title);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($rows as $row) {
          $project = new Projects();
          $project->setTitle($row['title']);
          $project->setGitHubURL($row['githubURL']);
          $project->setVideoLink($row['videoLink']);

          $projects[] = $project;
        }

        return $projects;

      }


  }

?>
