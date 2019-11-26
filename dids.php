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
            <a href="dids.php">DIDs</a>
            <img src="images/dids/DIDsIcon.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>



  <?php

 $sql=$db->query("SELECT *FROM `didsdetails`");
 $fetch_dids=$sql->fetch_array();


?>



<div class="didsborderbottom">
  <div class="container">
      <div class="didsarea">
          <div class="didstext">
            <h1>DIDs</h1>
            <hr>
            <p><?php echo $fetch_dids[1]; ?></p>
          </div>
          <div class="didscenterarea">
            <img src="images/dids/DIDscenter.png" alt="">
          </div>
      </div>
  </div>
</div> 






<?php

include 'footer.php';


?>
