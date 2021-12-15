<?php
include('config.php');
include('includes/header.php'); ?>
<!--HEADER ENDS HERE-->

<div class="hero">
<div class="hero-text">
<h1 class="headline desktop"><?php echo $headline; ?></h1>
<h1 class="headline mobile"><?php echo $mobile_headline; ?></h1>
</div>
</div><!--end hero-->

<main>
<section class="blurb">
<h2 class="subheader">Art &#38; Accessories</h2>
    <p class="desktop">BatchLife (Established 2016) is owned and operated by 
Vivian Crane-Conant, a local artist and Seattle native. 
What started as a playful pet name amongst friends (“Batch”) 
quickly turned into a lifestyle. After years of making unique jewelry and art for 
herself, friends, and family, Vivian decided to open up a small business 
selling her wares to other "Batches". All items are hand-crafted in Seattle, WA.</p>
<p class="mobile">BatchLife (Established 2016) is owned and operated by 
Vivian Crane-Conant. All items are hand-crafted in Seattle and sold
to other "Batches" nationwide. </p>
</section>

<section>
<h2 class="subheader">Shop</h2>
<div class="shop"> <!--Flex Container-->
  <div class="category">
  <a href="shop.php"><img class="mobile" src="images/stickers.jpg" alt="stickers"></a>  
  <a href="shop.php"><img class="desktop" src="images/stickers.png" alt="stickers"></a> 
  <h3>Stickers</h3>
  </div>  

  <div class="category">
  <a href="shop.php"><img class="mobile" src="images/buttons_mobile.jpg" alt="assorted buttons"></a>        
  <a href="shop.php"><img class="desktop" src="images/buttons.jpg" alt="assorted buttons"></a>
  <h3>Buttons</h3>
  </div> 

  <div class="category">
  <a href="shop.php"><img class="mobile" src="images/earrings_mobile.jpg" alt="earrings"></a>
  <a href="shop.php"><img class="desktop" src="images/earrings.jpg" alt="earrings"></a>
  <h3>Earrings</h3>
  </div> 

  <div class="category">
  <a href="shop.php"><img class="mobile" src="images/shirts_mobile.jpg" alt="shirts and bags"></a>   
  <a href="shop.php"><img class="desktop" src="images/shirts.jpg" alt="shirts and bags"></a>
  <h3>Shirts&nbsp;&#38;&nbsp;Bags</h3>
  </div> 

  <div class="category">
  <a href="shop.php"><img class="mobile" src="images/pornaments_mobile.jpg" alt="adult xmas ornament"></a>  
  <a href="shop.php"><img class="desktop" src="images/pornaments.jpg" alt="adult xmas ornament"></a>
  <h3>Pornaments</h3>
  </div> 

  <div class="category">
  <a href="shop.php"><img class="mobile" src="images/shop_all_mobile.jpg" alt="shop all categories"></a>    
  <a href="shop.php"><img class="desktop" src="images/shop_all_desktop.jpg" alt="shop all categories"></a>
  <h3>Shop All</h3>
  </div> 
</div> <!--end SHOP DIV-->
</section> <!-- END SHOP SECTION -->


<section class="instagram">
<h2 class="subheader">Follow Batch Life</h2>
<div id="ig-include"><?php include('includes/instagram.php'); ?></div>
</section>

<section class="calender">
<h2 class="subheader">Vending Schedule For <? echo date('M Y'); ?></h2>
<img id="calender-img" src="images/<? echo date('M'); ?>_vending_schedule<? echo date('Y'); ?>.jpg" alt="Vending Schedule for <? echo date('Y'); ?>">
</section>
</main>




<?php include('includes/footer.php'); ?>