<?php

  class Projects {
    
    private $id, $title, $githubURL, $videoLink;

    public function __construct() {
      $this->id = 0;
      $this->title = '';
      $this->githubURL = '';
      $this->videoLink = '';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($value) {
        $this->title = $value;
    }

    public function getGitHubURL() {
        return $this->githubURL;
    }

    public function setGitHubURL($value) {
        $this->githubURL = $value;
    }

    public function getVideoLink() {
        return $this->videoLink;
    }

    public function setVideoLink($value) {
        $this->videoLink = $value;
    }

  }

?>
