<link href="css/forms.css" rel="stylesheet"/> 
<?php
/**
 * simple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * simple.php provides a typical feedback form for a website
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php  
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>
	<!-- START HTML FORM -->
	<div class="form-wrapper">
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div class="label">
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Your Name" title="Name is required" tabindex="10" size="24" autofocus />
		</label>
	</div> <!--end label-->
	<div class="label">	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Your Email" title="A valid email is required" tabindex="20" size="24" />
		</label>
	</div><!--end label-->
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div class="comments">	
		<label class="comments">
			We love to hear from you:<br />
			<textarea name="Comments" cols="36" rows="4" placeholder="Your Comments Here...." tabindex="26"></textarea>
			
		</label>
	</div>	<!--end comments-->
	<div class="submit">
		<input type="submit" value="submit" />
	</div> <!--end submit-->
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
	<!--<div class="submit">
		<input type="submit" value="submit" />
	</div> end submit-->
    </form>
</div>  <!--END form-wrapper-->
	<!-- END HTML FORM -->