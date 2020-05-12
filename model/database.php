<?php

  //This file will connect to the MySQL database
  class Database {
    private static $dsn = 'mysql:host=localhost;dbname=mikesPage';
    private static $username = 'root';
    private static $password = 'root';
    private static $db;

    private function __construct() {}

    public static function getDB() {
      if (!isset(self::$db)) {
        try {
          //echo 'connected';
          self::$db = new PDO(self::$dsn,
                              self::$username,
                              self::$password);
           self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e) {
          //echo 'failed';
          $error_message = $e->getMessage();
          exit();
        }

      }
      return self::$db;
    }//End getDB function.

  }


?>
