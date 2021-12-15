<div class="shop-page-wrapper"> <!--FLEXBOX DIV TO CONTAIN ALL CATEGORIES-->

<?php 
$sql = 'SELECT * FROM buttons';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  echo '<div class="flex-contain">'; // CONTAINER - NOT FLEX
if (mysqli_num_rows($result) > 0 ) { 
  echo '<h2 class="subheader">Category</h2>';
  echo '<div class="category-container shop-page ">'; // FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
}

if(mysqli_num_rows($result) > 0 ) {
  while($row = mysqli_fetch_assoc($result)) { 
  echo '<div class="shop-page item">';
  echo '<img src="images/'.$row['item_type'].'_'.$row['button_id'].'.jpg" alt=" '.$row['item_type'].' ">';
  echo '<span class="name"><b>Name: </b> '.$row['item_type'].'</span>';
  echo '<span class="descr"><b>Description: </b> '.$row['descr'].'</span>';
  echo '<span class="price"><b>Price: </b>$'.$row['price'].'.00</span>';
  // echo '</ul>';
  echo '</div>';
  } // while
  echo '</div>'; // CLOSE FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
  }  else {
    echo 'NO!!!';
  }
  echo '</div>'; // CLOSE CATEGORY WRAP NON-FLEX DIV
  mysqli_free_result($result);
  mysqli_close($iConn);
  
  ?>

<?php 
$sql = 'SELECT * FROM buttons';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  echo '<div class="flex-contain">'; // CONTAINER - NOT FLEX
if (mysqli_num_rows($result) > 0 ) { 
  echo '<h2 class="subheader">Category</h2>';
  echo '<div class="category-container shop-page ">'; // FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
}

if(mysqli_num_rows($result) > 0 ) {
  while($row = mysqli_fetch_assoc($result)) { 
  echo '<div class="shop-page item">';
  echo '<img src="images/'.$row['item_type'].'_'.$row['button_id'].'.jpg" alt=" '.$row['item_type'].' ">';
  echo '<span class="name"><b>Name: </b> '.$row['item_type'].'</span>';
  echo '<span class="descr"><b>Description: </b> '.$row['descr'].'</span>';
  echo '<span class="price"><b>Price: </b>$'.$row['price'].'.00</span>';
  // echo '</ul>';
  echo '</div>';
  } // while
  echo '</div>'; // CLOSE FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
  }  else {
    echo 'NO!!!';
  }
  echo '</div>'; // CLOSE CATEGORY WRAP NON-FLEX DIV
  mysqli_free_result($result);
  mysqli_close($iConn);
  
  ?>

<?php 
$sql = 'SELECT * FROM buttons';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  echo '<div class="flex-contain">'; // CONTAINER - NOT FLEX
if (mysqli_num_rows($result) > 0 ) { 
  echo '<h2 class="subheader">Category</h2>';
  echo '<div class="category-container shop-page ">'; // FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
}

if(mysqli_num_rows($result) > 0 ) {
  while($row = mysqli_fetch_assoc($result)) { 
  echo '<div class="shop-page item">';
  echo '<img src="images/'.$row['item_type'].'_'.$row['button_id'].'.jpg" alt=" '.$row['item_type'].' ">';
  echo '<span class="name"><b>Name: </b> '.$row['item_type'].'</span>';
  echo '<span class="descr"><b>Description: </b> '.$row['descr'].'</span>';
  echo '<span class="price"><b>Price: </b>$'.$row['price'].'.00</span>';
  // echo '</ul>';
  echo '</div>';
  } // while
  echo '</div>'; // CLOSE FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
  }  else {
    echo 'NO!!!';
  }
  echo '</div>'; // CLOSE CATEGORY WRAP NON-FLEX DIV
  mysqli_free_result($result);
  mysqli_close($iConn);
  
  ?>


<?php 
$sql = 'SELECT * FROM buttons';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

  echo '<div class="flex-contain">'; // CONTAINER - NOT FLEX
if (mysqli_num_rows($result) > 0 ) { 
  echo '<h2 class="subheader">Category</h2>';
  echo '<div class="category-container shop-page ">'; // FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
}

if(mysqli_num_rows($result) > 0 ) {
  while($row = mysqli_fetch_assoc($result)) { 
  echo '<div class="shop-page item">';
  echo '<img src="images/'.$row['item_type'].'_'.$row['button_id'].'.jpg" alt=" '.$row['item_type'].' ">';
  echo '<span class="name"><b>Name: </b> '.$row['item_type'].'</span>';
  echo '<span class="descr"><b>Description: </b> '.$row['descr'].'</span>';
  echo '<span class="price"><b>Price: </b>$'.$row['price'].'.00</span>';
  // echo '</ul>';
  echo '</div>';
  } // while
  echo '</div>'; // CLOSE FLEXBOX DIV FOR INDIVIDUAL CATEGORIES
  }  else {
    echo 'NO!!!';
  }
  echo '</div>';  echo '</div>'; // CLOSE CATEGORY WRAP NON-FLEX DIV
  mysqli_free_result($result);
  mysqli_close($iConn);
  
  ?>








</div> <!--END FLEX CONTAINER FOR ALL ITEM CATEGORIES-->