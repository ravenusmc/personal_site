<?php

  class ProjectsDB {

      //This method will search for a game based on a title
      public static function searchForProjects() {

        $db = Database::getDB();

        $query = 'SELECT * from projects';
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        $game = new Game();

        $game->setId($row['game_id']);
        $game->setTitle($row['title']);
        $game->setRating($row['rating']);
        $game->setGenre($row['genre']);
        $game->setYear($row['year']);

        return $game;

      }


  }

?>
