<?php

/*portal-config.php
Used to store all of our WEB120 configuration information*/

ob_start();

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = '';

switch(THIS_PAGE){

    case 'index.php':
        $title = "Kacie's IT162 Portal Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;


    case 'contact-me.php':
        $title = "Kacie's IT162 Contact Page";
        $logo = 'fa-paper-plane-o';
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Me';
    break;


    case 'aia.php':
        $title = "Kacie's IT162 AIA Page";
        $logo = 'fa-universal-access';
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA';
    break;


    case 'big/index.php':
        $title = "Kacie's IT162 Big Project Page";
        $logo = '';
        $PageID = 'Big';
    break;


    case 'flowchart.php':
        $title = "Kacie's IT162 Flowchart";
        $logo = 'fa-pencil-square-o';
        $logo_color = ' style="color:#00f"';
        $PageID = 'Flowchart';
    break;


    case 'fp/index.php':
        $title = "Kacie's IT162 Final Project";
        $logo = '';
        $PageID = 'Final Project';
    break;


    default:
        $title = THIS_PAGE;
        $logo = '';//no default icon
        $PageID = 'Welcome';
}
// END SWITCH



// build mechanism to store each item
// array with keyword $nav[] ='';
// associative array: data from left associates with data on right

$nav1['index.php'] = "Welcome";
$nav1['aia.php'] = "AIA";
$nav1['big.php'] = "Big";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact-me.php'] = "Contact Kacie";


// function to generate current/highlighted navigation
/*<a href="index.php" class="active">Welcome</a>
<a href="aia.php">AIA</a>
<a href="big/index.php">Big</a>
<a href="flowchart.php">Flowchart</a>
<a href="fp/index.php">Final Project</a>  
<a href="contact-me.php">Contact Kacie</a>*/
// makeLinks($nav)

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text) {

        if($url == THIS_PAGE){
            $myReturn .= "<a class=\"active\" href=\"$url\">$text</a>";
        } else {
                $myReturn .= "<a href=\"$url\">$text</a>";
            }
    }
    return $myReturn;
}

?>
