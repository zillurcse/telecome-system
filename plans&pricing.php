<?php

include("database/index.php");
include 'header.php';


?>


  <div class="pagination">
    <div class="row">
      <div class="pagi">
        <ul>
          <li>
            <a href="index.php">Home</a><span> /</span>
            <a href="service.php">service</a><span> / </span>
            <a href="plans&pricing.php">Plans & Pricing</a><span> / </span>
            <img src="images/pricinglogo.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>

 <!--  <div class="fullpagi">
    <div class="pagi2">
      <div class="pagitop">
        <img src="images/rightangle.png" alt="">
        <p>User</p>
        <hr>
      </div>
      <ul>
        <li><a href="">Dids</a></li>
        <li><a href="">Call rates</a></li>
        <li><a href="">Features</a></li>
      </ul>
    </div>
  </div> -->











<div class="fullplanandpricingarea">
  <div class="leftsidebar">
    <!-- <p>demo</p> -->
  </div>
<div class="fulltable">
  <div class="container">
    <div class="ourplan">
        <div class="heading">
          <h1>User</h1>
          <hr>
        </div>
        
        <div class="row">


      <?php

    $sql=$db->query("SELECT * FROM `package` where type='User'  ORDER BY id ASC");
    while ($fetch_user=$sql->fetch_array()) {

    ?>

          <div id="" class="col-md-3 col-sm-6 col-6">
            <div class="pircingtable">
              <div class="tablehader">
                <div class="pricingbg">
                    <img src="images/pricing.png" alt="">
                  </div>
                  <div class="pricingtext">
                    <h1><?php echo $fetch_user[2]; ?></h1>
                    <h3>€ <?php echo $fetch_user[3]; ?> per month</h3>
                    <p>€ <?php echo $fetch_user[4]; ?> Setup Fee</p>
                  </div>
                  <div class="chossbtn">
                    <button>Choose</button>
                  </div>
              </div>
              <div class="tablebody">
                <div class="left">
                  <p>No. Of Extensions</p>
                  <h5><?php echo $fetch_user[5]; ?></h5>
                </div>

                <div class="left">
                  <p>No. Of Channels</p>
                  <h5><?php echo $fetch_user[6]; ?></h5>
                </div>


                <div class="left">
                  <p>Recording</p>
                  <h5><?php if($fetch_user[7]=="No")
                  {
                      print '<h5><img src="images/tik.png" alt=""></h5>';
                  }
                  else
                  {
                      print '<h5>-</h5>';
                  }

                  ?></h5>
                </div>


                <div class="left">
                  <p>IVR</p>
                   <h5><?php if($fetch_user[8]=="No")
                  {
                      print '<h5><img src="images/tik.png" alt=""></h5>';
                  }
                  else
                  {
                      print '<h5>-</h5>';
                  }

                  ?></h5>
                </div>


                <div class="left">
                  <p>Full Support</p>
                   <h5><?php if($fetch_user[9]=="No")
                  {
                      print '<h5><img src="images/tik.png" alt=""></h5>';
                  }
                  else
                  {
                      print '<h5>-</h5>';
                  }

                  ?></h5>
                </div>

                <div class="left">
                  <p>Call Center</p>
                   <h5><?php if($fetch_user[10]=="No")
                  {
                      print '<h5><img src="images/tik.png" alt=""></h5>';
                  }
                  else
                  {
                      print '<h5>-</h5>';
                  }

                  ?></h5>
                </div>
                 
 
              </div>
            </div>
          </div>

          <?php

         }

          ?>





        </div>
    </div>
  </div>
</div>
</div>









<div class="fullplanandpricingarea">
  <div class="leftsidebar">
    <!-- <p>demo</p> -->
  </div>
<div class="fulltable">
  <div class="container">
    <div class="ourplan">
        <div class="heading">
          <h1>CRM</h1>
          <hr>
        </div>
        
        <div class="row">


      <?php

    $sql=$db->query("SELECT * FROM `package` where type='Crm'  ORDER BY id ASC");
    while ($fetch_crm=$sql->fetch_array()) {

    ?>


          <div id="" class="col-md-3 col-sm-6 col-6">
            <div class="pircingtable2">
              <div class="tablehader">
                <div class="pricingbg">
                    <img src="images/pricing.png" alt="">
                  </div>
                  <div class="pricingtext">
                    <h1><?php echo $fetch_crm[2]; ?></h1>
                    <h3>€ <?php echo $fetch_crm[3]; ?> per month</h3>
                    <p>€ <?php echo $fetch_crm[4]; ?> Setup Fee</p>
                  </div>
                  <div class="chossbtn">
                    <button>Choose</button>
                  </div>
              </div>
              <div class="tablebody">
                <div class="left">
                  <p>No. Of Extensions</p>
                  <h5><?php echo $fetch_crm[5]; ?></h5>
                </div>

 
              </div>
            </div>
          </div>


          <?php

       }

          ?>

 

        </div>
    </div>
  </div>
</div>
</div>















<div class="container">
  <div class="dids">
    <div class="heading">
      <h2>DIDs</h2>
    </div>
    <div class="downloadbtn">
      <p>Download Complete List</p>
      <img src="images/dowloadbtn.png" alt="">
    </div>
  </div>

 <div class="container"> 
  <div class="fulltable">
    <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Country</th>
          <th scope="col">Setup</th>
          <th scope="col">Monthly</th>
          <th scope="col">INCOMING <br> COSTS</th>
          <th scope="col">RESTRICTIONS <br>(Upon Purchase)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>$0.081</td>
            <td>$0.081</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>$0.081</td>
            <td>$0.081</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <th scope="row">Argentina</th>
            <td>$21.60</td>
            <td>$21.60</td>
            <td>-</td>
            <td>-</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</div>












<div class="container">
  <div class="dids">
    <div class="heading">
      <h2 style="text-transform: uppercase;">Call Rates</h2>
    </div>
    <div class="downloadbtn">
      <p>Download Complete List</p>
      <img src="images/dowloadbtn.png" alt="">
    </div>
  </div>

  <div class="fulltable">
    <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">GROUP</th>
          <th scope="col">COST PER MINUTE <br>(USD)</th>
          <th scope="col">Increment</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
        <tr>
            <th scope="row">Afghanistan</th>
            <td>0.275</td>
            <td>1</td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
</div>










<div class="servicearea">
  <div class="container">
    <div class="dids">
      <div class="heading1">
        <h2 style="text-align: center;">Features</h2>
      </div>
    </div>

    <div class="fulltable">
      <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Features</th>
            <th scope="col">Pro</th>
            <th scope="col">Guru</th>
            <th scope="col">Business</th>
            <th scope="col">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
          <tr>
              <th scope="row">Fine Me/ Follow Me</th>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
              <td>€ 0.00</td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</div>





<?php

include 'footer.php';


?>

