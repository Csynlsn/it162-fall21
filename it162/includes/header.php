<?php include 'portal-config.php';?>
<!DOCTYPE html>
 <html lang="en">
  <head>
   <title><?php echo $title;?></title>
   <meta name="robots" content="noindex,nofollow" />
   <meta name="viewport" content="width=device-width" />
   <meta charset="utf-8" />
   <link href="css/portal.css" rel="stylesheet" />
   <link href="css/forms.css" rel="stylesheet"/> 
   <script src="https://use.fontawesome.com/5fe0cfcb17.js"></script>
  </head>
  <body class="PageID">
  <div class="wrapper">
      <header>
      <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i>
      Kacie&nbsp;Nielsen's IT162 Portal&nbsp;Website</a></h1>
      <nav class="topnav" id="myTopnav">
        <?=makeLinks($nav1)?>
        <!-- <a href="index.php" class="active">Welcome</a>
        <a href="aia.php">AIA</a>
        <a href="big/index.php">Big</a>
        <a href="flowchart.php">Flowchart</a>
        <a href="fp/index.php">Final Project</a>  
        <a href="contact-me.php">Contact Kacie</a> -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </nav>
      </header>
          <h2 class="PageID"><?=$PageID?></h2>
      <!-- header ends here -->