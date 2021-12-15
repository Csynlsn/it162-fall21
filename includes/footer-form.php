
<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['email'])) {
    $email_Err = 'Please provide your email';
    unset($_POST['email']);
} else {
    $email = $_POST['email'];
}


    if(isset(
        $_POST['email']
    
        )) { 
            
        $to = 'admin@kaciecodes.com';
        $subject = 'BatchLife Newsletter' .date('m/d/y') ;
        $body = '
        Email: '.$email.' '.PHP_EOL.'
        ';
            
        $headers = array(
        'From' => 'noreply@kaciecodes.com',
        'Relpy-to' => ''.$email.'',
        );
            
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        }   


} // end server request method    

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post" class="sign-up">
<fieldset>
<h3>Sign Up For Our Newsletter</h3>    
<label for="newsletter-email">Email Address</label>
<input type="email" name="email" id="newsletter-email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<button name="submit">SUBMIT</button>
</fieldset>
</form>