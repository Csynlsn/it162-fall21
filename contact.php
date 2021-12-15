<?php
include('config.php');
include('includes/contact-header.php'); ?>
<!--HEADER ENDS HERE-->

<h1 class="headline"><?php echo $headline; ?></h1>


<div class="form-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label for="name">Your Name &#x2a;</label>
<span class="error"><?php echo $name_Err; ?></span>
<input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>
">

<label for="email">Email &#x2a;</label>
<span class="error"><?php echo $email_Err; ?></span>
<input type="email" minlength="1" name="email" id="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>
">

<label for="phone">Phone Number (optional)</label>
<!-- <span class="error"><?php echo $phone_Err; ?></span> -->
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" id="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>
">


<label>What Are You Interested In?</label>
<ul>

<li><input type="checkbox" name="inquiries[]" value="inquiries[]" 
<?php if(isset($_POST['inquiries']) && in_array('custom', $inquiries)) echo 'checked="checked"' ;?>
>Custom Order Inquiries</li>
<li><input type="checkbox" name="inquiries[]" value="inquiries[]" 
<?php if(isset($_POST['inquiries']) && in_array('schedule', $inquiries)) echo 'checked="checked"' ;?>
>Batch Life Vending Schedule</li>
<li><input type="checkbox" name="inquiries[]" value="inquiries[]" 
<?php if(isset($_POST['inquiries']) && in_array('hello', $inquiries)) echo 'checked="checked"' ;?>
>Just saying "Hi"!</li>

</ul>

<label for="comments">Questions or Comments? &#x2a;</label>
<span class="error"><?php echo $comments_Err; ?></span>
<textarea name="comments" id="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>


<input type="submit" value="Send it">

<span><small><i>&#x2a; required</i></small></span>
</fieldset>
</form>
</div> <!--END FORM CONTAINER-->












<?php include('includes/footer.php'); ?>