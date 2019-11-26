<?php

include 'database/index.php';

?>


<?php

include 'header.php';

?>






  <div class="pagination">
    <div class="row">
      <div class="pagi">
        <ul>
          <li>
            <a href="index.php">Home</a><span> /</span>/
            <a href="keyfeatures.php">Key features</a> <span>/</span>
            <a href="recording.php">Recording</a>
            <img src="images/recording/Recordingicon.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>

  <?php

 $sql=$db->query("SELECT *FROM `recording`");
 $fetch_recording=$sql->fetch_array();


?>





<div class="didsborderbottom">
  <div class="container">
      <div class="didsarea">
          <div class="didstext">
            <h1>Recording</h1>
            <hr>
            <p><?php echo $fetch_recording[1]; ?></p>
          </div>
          <div class="didscenterarea">
            <img src="images/recording/Recordingcenter.png" alt="">
          </div>
      </div>
  </div>
</div> 








<?php

include 'footer.php';

?>


