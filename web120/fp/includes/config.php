<?php
//config.php file for Big

//Here are the keys for the server: seattlecentral.edu
include 'credentials.php';

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

$title = THIS_PAGE;

$robots = "noindex,nofollow";
$meta_description = "Graphic Designer seeking employment in Seattle.";
$meta_keywords = "graphic design, logo designn, print design, advertising design, branding";

switch(THIS_PAGE){

    case 'index.php':
        $title = 'Brandon\'s Home Page!';
        $logo = "fa-home";
        break;

        case 'contact.php':
        $title = 'Brandon\'s Contact Page!';
        $logo = "fa-paper-plane-o";
        $robots = "noindex,follow";
        $meta_description = "Please contact Brandon, I'm a " . 
        $meta_description;
        $meta_keywords = "how to design a logo, branding and marketing" .
        $meta_keywords;
    break;

}



?>