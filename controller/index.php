<?php

//Setting a default action
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home_page';
    }
}

//Switch statment to determine which page to go to.
switch ($action) {

  // This will bring you to the home page
  case 'home_page':
    include('home.php');
    break;
  // This action will bring you to the Early years page
  case 'early_years':
    include('early_years.php');
    break;
  case 'tts_years':
    include('tts_years.php');
    break;
  case 'GTC':
    include('GTC.php');
    break;
  case 'current':
    include('current.php');
    break;


}

?>
