<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<script src="https://kit.fontawesome.com/236cdfe8ce.js" crossorigin="anonymous"></script>
<link href="css/styles.css" type="text/css" rel= "stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Libre+Baskerville&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">

<title><?php echo $title; ?></title>
</head>

<body>
<div class="wrapper">
    <header>

        <nav class="topnav" id="myTopnav"> 
                 <!-- LOGOS--><a class="logo" href="index.php">BatchLife</a><!--LOGOS -->
                 <a href="javascript:void(0);" class="icon mobile" id="ham" onclick="myFunction()">&#9776;</a> 
            <ul>
            <?php echo my_nav($nav);?>
            </ul>
        </nav>
    </header>        <!--HEADER END-->