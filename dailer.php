<?php

require_once 'database/index.php';
include 'header.php';



?>




<div class="pagination">
  <div class="row">
    <div class="pagi">
      <ul>
        <li>
          <a href="index.php">Home</a><span> /</span>/
          <a href="technology.php">Techonology</a> <span>/</span>
          <a href="dailer.php">Dailer</a> <span>/</span>
           <img src="images/dialer/Dialericon.png" alt="">
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- <div class="pannel">
  <h1>About</h1>
  <hr>
  <ul>
    <li>skjfkjd</li>
    <li>ada</li>
  </ul>
</div> -->


<?php

 $sql=$db->query("SELECT *FROM `dailerabout`");
 $fetch_dailer=$sql->fetch_array();

?>

<div class="container">
  <div class="rightsidebar">
    <div class="callcentertext">
      <div class="row">
        <div class="col-md-6">
          <div class="callcentertext_left">            
            <h1>About</h1>
            <hr>
            <p><?php echo $fetch_dailer[1]; ?></p>
          </div>
        </div>


        <div class="col-md-6">
          <div class="callcentertext_right">
            <img src="images/callcenter/Call centerlogo.png" alt="">
          </div>
        </div>
       
      </div>
    </div>     
  </div>
</div>


<div class="container">
  <div class="featurearea">
    <div class="featureareaheading">
      <h1>Features</h1>
      <hr>
    </div>

    

    <?php

    $sql=$db->query("SELECT *FROM `dailerfeatures` ORDER BY id ASC");
    while ($fetch_dailerfeatures=$sql->fetch_array()) {

    ?>

    <div class="featurerow">
      <h1><?php echo $fetch_dailerfeatures[1]; ?></h1>
      <p><?php  echo $fetch_dailerfeatures[2]; ?></p>
    </div>


    <?php

  }
    ?>


    <div class="extends">
      <div class="extendstext">
        <h1>Expand >></h1>
      </div>
    </div>

  </div>
</div>

<div class="container">
    <div class="callcentervideo">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/JSH8Kmd0zio" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>


  <div class="forborderbottom">
</div>
 
 


<?php


include 'footer.php';



?>

