<footer> 

        <?php include('footer-form.php');?>

    <ul class="quick-links">
        <li><a href="faq.php">FAQ</a></li>
        <li><a href="faq.php">SHIPPING</a></li>
        <li><a href="faq.php">ORDERS &#38; PAYMENTS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>


    <ul class="bottom-links">
        <li>Copyright &copy; 2020-<?=date("Y")?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="">Web Design by Kacie</a></li>
        <li><small><a id="html-checker" href="#">HTML&nbsp;Validation</a>&nbsp;~&nbsp;<a href="https://jigsaw.w3.org/css-validator/check?uri=referer">CSS&nbsp;Validation</a></small></li>
    </ul>

    <hr>
    
    <ul class="social">
        <li><i class="fas fa-envelope-square"></i></li>
        <li><a href ="https://www.instagram.com/batchlife/?hl=en"><i class="fab fa-instagram-square"></i></a></li>
        <li><i class="fab fa-facebook-square"></i></li>
    </ul>

</footer>

<script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  

     function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += "responsive";
        } else {
            x.className = "topnav";
        }
    } 
</script>

</div> <!--CLOSE WRAPPER-->
</body> 
</html>