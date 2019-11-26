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
            <a href="siptrunk.php">Sip Trunk</a>
            <img src="images/siptrunk/SipTrunkicon.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>



  <?php

 $sql=$db->query("SELECT *FROM `siptrunk`");
 $fetch_sip=$sql->fetch_array();


?>










<div class="didsborderbottom">
  <div class="container">
      <div class="didsarea">
          <div class="didstext">
            <h1>sip trunk</h1>
            <hr>
            <p><?php echo $fetch_sip[1]; ?></p>
          </div>
          <div class="didscenterarea">
            <img src="images/siptrunk/SipTrunkcenter.png" alt="">
          </div>
      </div>
  </div>
</div> 



<?php

include 'footer.php';

?>