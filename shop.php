<?php
include('config.php');
include('includes/header.php'); ?>

<!--HEADER ENDS HERE-->
<div class="hero">
<div class="hero-text">
<h1 class="headline"><?php echo $headline; ?></h1>
</div>
</div><!--end hero-->

<main>
<section>
<h2 class="subheader">Shop BatchLife</h2>

<?php include('includes/sql.php'); ?>

</section> <!--end shop-->
</main> 
<?php include('includes/footer.php'); ?>