<?php

//Setting a default action
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'category_page';
    }
}

//Switch statment to determine which page to go to.
switch ($action) {

  case 'category_page':
    include('home.php');
    break;

}

?>
