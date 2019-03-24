<?php
//config.php file for Big

include 'credentials.php';

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

$title = THIS_PAGE;

$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle. Focus on JavaScript, CSS & HTML.";
$meta_keywords = "web design, website design, website builder, web developer, website creator, website designer, responsive web design, web development, web page design";

switch(THIS_PAGE){

    case 'index.php':
        $title = 'David\'s BIG Home Page!';
        $logo = "fa-home";
        $robots = "noindex,follow";
        $meta_description = "Please contact David, I'm a " . 
        $meta_description;
        $meta_keywords = "how to build a website, build a website, design website, website layout" .
        $meta_keywords;
    break;


}


?>

