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
            <a href="about.php">About</a> <span>/</span>
             <img src="images/about/AboutIcon.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>




<div class="container">
  <div class="lightarea">
      <img src="images/about/light.png" alt="">
  </div>
</div>

<?php

 $sql=$db->query("SELECT *FROM `about`");
 $fetch_about=$sql->fetch_array();


?>




<div class="container">
  <div class="fullaboutustext">
    <div class="abouttext">
        <h1>Introduction</h1>
        <hr>
        <p><?php echo $fetch_about[1]; ?></p>
    </div>
  </div>
 </div>

<div class="container">
  <div class="ourteam">
      <h1>Team</h1>
      <hr>
      <!-- <div class="row">
        <div class="col-md-4 col-sm-4 col-4">
          <img src="images/about/teammember1.png" alt="">
        </div>
        <div class="col-md-4 col-sm-4 col-4">
          <img src="images/about/teammember2.png" alt="">
        </div>
        <div class="col-md-4 col-sm-4 col-4">
          <img src="images/about/teammember3.png" alt="">
        </div>
      </div>
 -->     <!--  <div class="control">
        <img class="img1" src="images/about/circle.png" alt="">
        <img class="img2" src="images/about/leftangle.png" alt="">
        <img class="img3" src="images/about/rightangle.png" alt="">
      </div> -->
        <main>

    <div id="carousel">

       <div class="hideLeft">
        <img src="">
      </div>

     <div class="prevLeftSecond">
        <img src="images/about/teammember3.png">
      </div>

      <div class="prev">
        <img src="images/about/teammember1.png">
      </div>

      <div class="selected">
        <img src="images/about/teammember2.png">
      </div>

      <div class="next">
        <img src="images/about/teammember3.png">
      </div>

     <div class="nextRightSecond">
        <img src="images/about/teammember2.png">
      </div>

      <div class="hideRight">
        <img src="images/about/teammember1.png">
      </div>

    </div>

   

  </main>
      
     <div class="buttons">
      <div class="btnleft">
        <img id="prev" src="images/about/leftangle.png" alt="">
      </div>

      <div class="btnright">
        <img id="next" src="images/about/rightangle.png" alt="">
      </div>
    </div>




  </div>
</div>

<div class="container">
  <div class="aboutusvideo">
    <iframe width="100%" height="500" src="https://www.youtube.com/embed/JSH8Kmd0zio" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!-- <img src="images/about/aboutusvideo.png" alt=""> -->
  </div>
</div>





   <div class="forborderbottom">
</div>










 

<?php

include 'footer.php';

?>



