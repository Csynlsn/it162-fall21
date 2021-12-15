<?php
ob_start();  
define('DEBUG', 'TRUE');

include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['shop.php'] = 'Shop';
$nav['contact.php'] = 'Contact';


function my_nav($nav) {
$my_return = '';
foreach($nav as  $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '
<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';    
} else {
    $my_return .= '<li><a href=" '.$key.' ">'.$value.'</a></li>'; 
} // end else
} // end foreach 
return $my_return;
} // end my_nav

switch(THIS_PAGE) {
    case 'index.php'; 
    $title = 'BatchLife';
    $body = 'home';
    $headline = 'Designs For The Everyday Unicorn';
    $mobile_headline = 'BatchLife';
    break;

    case 'about.php'; 
    $title = 'About BatchLife';
    $body = 'about inner';
    $headline = 'About Vivian';
    break;

    case 'shop.php'; 
    $title = 'Shop BatchLife';
    $headline = 'Handmade in West Seattle';
    break;

    case 'contact.php'; 
    $title = 'Contact BatchLife';
    $headline = 'Contact Vivian';
    break;

    case 'faq.php'; 
    $title = 'FAQ';
    $headline = 'Shop policies for BatchLife';
    break;

    case 'thx.php'; 
    $title = 'Thank You!';
    $headline = '';
    break;

}



//this is beggining of switch for HW3
if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}


/*EMAILABLE FORM START*/ /*EMAILABLE FORM START*/ /*EMAILABLE FORM START*/

$name = '';
$email = '';
$phone = '';
$inquiries = '';
$comments = '';


$name_Err = '';
$email_Err = '';
$phone_Err = '';
$comments_Err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])) {
        $name_Err = 'Please provide your name';
    } else {
        $name = $_POST['name'];
    }

    if(empty($_POST['email'])) {
        $email_Err = 'Please provide your email';
        unset($_POST['email']);
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['inquiries'])) {
        $inquiries_Err = '';
    } else {
        $inquiries = $_POST['inquiries'];
    }

    if(empty($_POST['comments'])) {
        $comments_Err = 'Please tell us your secrets';
    } else {
        $comments = $_POST['comments'];
    }

    // inquiries function

  function inquiries() {
    $my_return = '';
    if(!empty($_POST['inquiries'])) {
        $my_return = implode(', ', $_POST['inquiries']); 
    } 
    return $my_return;  
   
   } // close function cheese_time()    


        if(isset(
            $_POST['name'],
            $_POST['comments'],
            $_POST['email']
        
            )) { 
                
            $to = 'admin@kaciecodes.com';
            $subject = 'Test Email Portfolio' .date('m/d/y') ;
            $body = '
            Name: '.$name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Inquiries: '.inquiries().' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
            ';
                
            $headers = array(
            'From' => 'noreply@kaciecodes.com',
            'Relpy-to' => ''.$email.'',
            );
                
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
            }   
    
    
    } // end server request method    
    
 /*EMAILABLE FORM END*/    /*EMAILABLE FORM END*/    /*EMAILABLE FORM END*/     


// random images

function random_pics() {

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$pic = ''.$photos[$i].'.jpg';
$random_pic = '<img class="random" src="images/'.$pic.'" alt="'.$photos[$i].'">';
return $random_pic;

} // end random images






?>