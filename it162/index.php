
 <!DOCTYPE html>
 <html lang="en">
  <head>
   <title>Kacie Nielsen's IT162 Portal Website</title>
   <meta name="robots" content="noindex,nofollow" />
   <meta name="viewport" content="width=device-width" />
   <meta charset="utf-8" />
   <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
  <div class="wrapper">
      <header>
      <h1>Kacie Nielsen's IT 162 Portal Page</h1>
      <nav class="topnav" id="myTopnav">
        <a href="index.php" class="active">Welcome</a>
        <a href="aia.php">AIA</a>
        <a href="big/index.php">BIG</a>
        <a href="flowchart.php">Flowchart</a>
        <a href="fp/index.php">Final Project</a>  
        <a href="contactme.php">Contact Kacie</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </nav>
</header>
        
        
      <main>
          <h2>About Kacie</h2>
          <img class="phone" src="images/street-art-lisbon.jpg" alt="Lisbon street art" />
          <p>I am a web development student at Seattle Central college currently in my second quarter of the certificate program.
            I'm interested especially in responsive web design, accessibility, and, of course, beautiful websites.
          COvid jumpstarted my transition out of the restaurant industry and I'm excited to try something new.</p>
          <p>My goal is to eventually support myself primarily via freelance work. I also want to hone the technical skills 
              nescessary to donate my time and efforts to causes which are important to me.</p>
          <p>Outside of school, I enjoy running, traveling, watching documentaries, listening to podcasts, and spending
              time with my cat, Moose.</p>    
      </main>

        <section>
          <img class="desktop" src="images/snowy-trees.jpg" alt="Yokohama China Town" />
          <img class="tablet" src="images/golden-gai.jpg" alt="Lisbon mural of woman" />
        </section>  
       
          
        
      <footer>
       <p><small>&copy; 2021 by 
           <a href="contact.php">Kacie Nielsen</a>, All Rights Reserved ~  
           <a id="html-checker" href="#">Check HTML</a> ~ 
           <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">Check CSS ~</a>
           Photographs by Kacie</small>
      </p>
     </footer>
   </div><!--END wrapper-->

            
   <script>
     //https://tinyurl.com/dynamic-html-checker
     document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
     
     //manages mobile nav 
     function myFunction() {
         var x = document.getElementById("myTopnav");
         if (x.className === "topnav") {
             x.className += " responsive";
         } else {
             x.className = "topnav";
         }
     }   
  </script>
      
  </body>
 </html>