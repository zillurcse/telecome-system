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
            <a href="keyfeatures.php">Key features</a> <span>/</span>
            <a href="ivr.php">IVR</a>
            <img src="images/ivr/IVRicon.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>




  <?php

 $sql=$db->query("SELECT *FROM `ivr`");
 $fetch_ivr=$sql->fetch_array();


?>





<div class="didsborderbottom">
  <div class="container">
      <div class="didsarea">
          <div class="didstext">
            <h1>IVR</h1>
            <hr>
            <p><?php echo $fetch_ivr[1]; ?></p>
          </div>
          <div class="didscenterarea">
            <img src="images/ivr/IVRcenter.png" alt="">
          </div>
      </div>
  </div>
</div> 







<?php

include 'footer.php';

?>