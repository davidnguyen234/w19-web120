<?php
//config.php
// echo basename($_SERVER['PHP_SELF']);

include 'credentials.php';


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');


$title = THIS_PAGE;

//no index while building a client site in our space
$robots = "noindex,nofollow";
$meta_description = "Web developer seeking employment in Seattle. Focus on JavaScript, CSS & HTML.";
$meta_keywords = "web design, website design, website builder, web developer, website creator, website designer, responsive web design, web development, web page design";


switch(THIS_PAGE){

    case 'index.php':
        $title = 'David\'s Home Page!';
        $logo = "fa-home";
    break;

    case 'contactme.php':
    $title = 'David\'s Contact Page!';
    $logo = "fa-paper-plane-o";
    $robots = "noindex,follow";
    $meta_description = "Please contact David, I'm a " . 
    $meta_description;
    $meta_keywords = "how to build a website, build a website, design website, website layout" .
    $meta_keywords;
break;

}

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['contactme.php'] = "Contact David";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp_template/template.php'] = "FP Template";
    $nav1['fp/index.php'] = "Final Project";
       
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>