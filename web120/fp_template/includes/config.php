<?php
//config.php file for Big

include 'credentials.php';

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
        $title = 'David\'s BIG Home Page!';
        $logo = "fa-home";
    break;

    case 'contactme.php':
    $title = 'David\'s Contact Page!';
    $logo = "fa-paper-plane-o";
break;

}


?>