<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<link href="css/grid.css" type="text/css" rel= "stylesheet">
<link href="css/media.css" type="text/css" rel= "stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Praise&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
<title>Batch Life</title>
</head>

<div class="wrapper">
<body>
    <header>
        <!-- <div class="logo-round"> -->
        <a href="index.php"><img class="logo-round" src="images/batch-logo-round.png" alt="cat in space logo"></a> 
        <!-- </div> -->

        <!-- <div class="logo-batch"> MOBILE LOGO -->
        <a href="index.php"><img class="logo-batch" src="images/batch-life.jpeg" alt="batch life"></a> 
        <!-- </div> -->
        <nav>          
            <ul>
                <li><a href=" index.php " class="current">Home</a></li>
                <li><a href=" about.php ">About</a></li>
                <li><a href=" shop.php ">Shop</a></li>
                <li><a href=" contact.php ">Contact</a></li>
            </ul>
        </nav>
    </header>
<main class="home-main">
    MAIN    12 12 12 12
iam, quis nostrum exercitationem ullam corporis suscipit laboriosam, iam, quis nostrum exercitationem ullam corposamiam,
 quis nostrum exercitationem ullam corporis suscipit laboriosamiam, quis nostrum exercitationem ullam corporis suscipit 
iam, quis nostrum exercitationem ullam corporis suscipit laboriosamnisi ut aliquid ex ea commodi consequatur?
</main> <!-- END main -->

<section class="home-shop">
  <div class="shop sticker"><h3>Stickers</h3>
       <img class="shop desktop" src="images/stickers.jpg">
       <img class="shop mobile" src="images/misfits-mobile.jpg">  
  </div>  

  <div class="shop button"><h3>Buttons</h3>
        <img class="shop mobile" src="images/buttons-mobile.jpg">        
        <img class="shop desktop" src="images/buttons.jpg">
  </div> 

  <div class="shop earring"><h3>Earrings</h3>
        <img class="shop mobile" src="images/earrings-mobile.jpg">
        <img class="shop desktop" src="images/earrings.jpg">
  </div> 

  <div class="shop print"><h3>Prints</h3>
        <img class="shop mobile" src="images/misfits-mobile.jpg">    
        <img class="shop desktop" src="images/stickers.jpg">
  </div> 

  <div class="shop pornament"><h3>Pornaments</h3>
    <img class="shop mobile" src="images/misfits-mobile.jpg">  
    <img class="shop desktop" src="images/pornaments.jpg">
  </div> 

  <div class="shop shirt"><h3>Shirts &#38; Bags</h3>
    <img class="shop mobile" src="images/shirts-mobile.jpg">    
    <img class="shop desktop" src="images/shirts.jpg">
  </div> 
</section>

<section class="home-about"><h3>About Batch Life</h3>
<p>Batch Life (Established 20XX) is owned and operated by Vivian Crane-Conant, a local artist and Seattle native. 
What started as a playful pet name amongst friends (“Batch”) quickly turned into a lifestyle. 
After years of making unique jewelry and art for herself, friends, and family, Vivian decided to open up a small business 
selling her wares to other "Batches".</p>
</section>

<section class="home-contact"><h3>Contact Vivian</h3>
</section>


<aside class="home-aside">
<h3>Follow Batch Life</h3>
<a href="#"> <img class="ig" src="images/ig-logo.svg" alt="Instagram logo"></a>
</aside>

<footer>
<form aria-label="sign up for our newsletter" name="" action="" class="sign-up">
<fieldset>
<h3>Sign Up For Our Newsletter</h3>    
<label for="email" name="email">Email Address</label>
<input type="email" name="email">
<button name="submit">SUBMIT</button>
</fieldset>
</form>


    <ul class="quick-links">
        <li>FAQ</li>
        <li>SHIPPING</li>
        <li>ORDERS &#38; PAYMENTS</li>
        <li>CONTACT</li>
    </ul>

<div class="bottom-links">
    <ul>
        <li>Copyright &copy; 2020-<?=date("Y")?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="">Web Design by Kacie</a></li>
        <li><small><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS Validation</a></small></li> 
    </ul>
</div><!--end bottom-links-->

</footer>

<script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
</script>
    
</div> <!--END wrapper-->
</body>
</html>