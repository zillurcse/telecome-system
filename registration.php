
<?php
include("database/index.php");
include 'header.php';

?>

  <div class="pagination">
    <div class="row">
      <div class="pagi">
        <ul>
          <li>
            <a href="index.php">Home</a><span> /</span>/
            <a href="service.php">Services</a> <span>/</span>
            <a href="registration.php">Registration</a>
            <img src="images/man.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>



<div class="container">
  <div class="signupTop">
      <div class="heading">
        <h1>Company details</h1>
        <hr>
      </div>

        <div class="row">
            <div class="col-md-6" id="comanyname">
                <input type="text" name="comanyname" id="comName" placeholder="Company Name" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="industry" id="industry" placeholder="Industry" autocomplete="off">
            </div>
            
            <div class="col-md-12" id="comanyname">
                <textarea name="address" id="address"  placeholder="Address"></textarea>
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="city" id="city" placeholder="City" autocomplete="off">
            </div>
            

            <div class="col-md-6" id="comanyname">
                <input type="text" name="zip_code" id="zip_code" placeholder="Zip Code" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="state" id="state" placeholder="State" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="country" id="country" placeholder="Country" autocomplete="off"> 
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="url" id="url" placeholder="Url" autocomplete="off">
            </div>


            <div class="col-md-6" id="comanyname">
                <input type="email" name="email" id="email" placeholder="Email" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="phone" id="phone" placeholder="Phone" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="fax" id="fax" placeholder="Fax" autocomplete="off">
            </div>



            


        </div>


  

  



    </div>
  </div>






<div class="container">
  <div class="signupTop">
      <div class="heading">
        <h1>Contact Person</h1>
        <hr>
      </div>
      <form action="" class="fullform">
        <div class="row">

                <div class="col-md-6" id="comanyname">
                <input type="text" name="first_name"  id="first_name" placeholder="First Name" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" autocomplete="off">
            </div>

             <div class="col-md-6" id="comanyname">
                <input type="email" name="email_user" id="email_user" placeholder="Email" autocomplete="off">
            </div>

            <div class="col-md-6" id="comanyname">
                <input type="text" name="phone_user" id="phone_user" placeholder="Phone" autocomplete="off">
            </div>

          <div class="col-md-6" id="comanyname">
              <input type="text" placeholder="Mobile">
          </div>

          <div class="col-md-6" id="seekbar">
              <div class="slidecontainer">
                  <p>My Sales Team Consist of 10-50 agents</p>
                  <input type="range" min="1" max="5" steps="1" value="1" class="slider" id="myRange">
                  <p class="pp">0-10</p> <p>10-15</p> <p>50-100</p> <p>100-150</p> <p>150+</p>
              </div>
          </div>
          
          

          <div class="col-md-12 col-sm-12 col-12" id="comanyname">
              <textarea class="anothertextarea" name="field3" id="market_zone" placeholder="What zone do you market to?"></textarea>
          </div>


<input type="hidden" name="package"  id="selectClass">

          <?php

    $sql=$db->query("SELECT * FROM `package_class` ORDER BY id ASC");
    while ($fetch_user=$sql->fetch_array()) {

    ?>

          <div class="col-md-12" id="comanyname">
              <div class="selectitem">
                <p onclick="Packageclass(<?php echo $fetch_user['id']; ?>)" ><?php echo $fetch_user['class_name']; ?> <span><?php echo $fetch_user['country_name']; ?></span> </p><!-- 
                <p>Class 2 <span>Eurpoe - Asia</span> </p>
                <p>Class 3 <span>GCC - Africa</span> </p>
                <p>Class 4 <span>Former USSR</span> </p> -->
              </div>
          </div>

        <?php } ?>

        </div>
      </form>
    </div>
  </div>


<div class="fulltable">
  <div class="container">
    <div class="ourplan">
        <div class="heading">
          <h1>Choose plan</h1>
          <hr>
        </div>
        
         <div class="row">


<input type="hidden" name="package"  id="selectPackage">

 <?php

    $sql=$db->query("SELECT * FROM `package` where type='User'  ORDER BY id ASC");
    while ($fetch_user=$sql->fetch_array()) {

    ?>

          <div id="" class="col-md-3 col-sm-6 col-6">
            <div class="pircingtable">
              <div class="tablehader">
                <div class="pricingbg">
                    <img src="images/pricing.png" alt="" >
                  </div>
                  <div class="pricingtext">
                    <h1><?php echo $fetch_user[2]; ?></h1>
                    <h3>€ <?php echo $fetch_user[3]; ?> per month</h3>
                    <p>€ <?php echo $fetch_user[4]; ?> Setup Fee</p>
                  </div>
                  <div class="chossbtn">
                    <button  onclick="packageTitle(<?php echo $fetch_user[0]; ?>)">Choose</button>
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



   <div class="col-md-12 submitbtn">
    <center>

          <center>
      <label> <button type="button" name="add" onclick="return InsertData()">Submit</button></label>
      <label id="loading" style="color: #fff; padding-left: 20px; font-size: 18px;"> </label>

      

    </center>

  </div>
  
</div>






<?php

include 'footer.php';

?>


<script type="text/javascript">
  
  function packageTitle(x)
  {
    //  alert(x);

      $("#selectPackage").val(x);

  }

  function Packageclass(y)
  {
     // alert(y);

      $("#selectClass").val(y);


  }
</script>

<script type="text/javascript">
  
  function InsertData()        
{
       var img = '<img src="loading.gif" height="80" width="80" /> Loading...';
       $('#loading').html(img);

        var comName=$("#comName").val();
        if(comName=="")
        {
          alert("Enter Company Name");
          return;
        }
        var industry=$("#industry").val();
         if(industry=="")
        {
          alert("Enter Industry Name");
          return;
        }

        var address=$("#address").val();
        if(address=="")
        {
          alert("Enter Your Address ");
          return;
        }

        

         var city=$("#city").val();
        if(city=="")
        {
          alert("Enter City ");
          return;
        }


       

        var zip_code=$("#zip_code").val();
        if(zip_code=="")
        {
          alert("Enter Zip Code ");
          return;
        }

        var state=$("#state").val();
        if(state=="")
        {
          alert("Enter state ");
          return;
        }


      

     

       var country=$("#country").val();
        if(country=="")
        {
          alert("Enter country ");
          return;
        }


       var url=$("#url").val();
      

        var email=$("#email").val();
        if(email=="")
        {
          alert("Enter email ");
          return;
        }


        var phone=$("#phone").val();
       




        var fax=$("#fax").val();
       

  
    var first_name=$("#first_name").val();
        if(first_name=="")
        {
          alert("Enter first Name ");
          return;
        }

 var last_name=$("#last_name").val();
        if(last_name=="")
        {
          alert("Enter last Name ");
          return;
        }


 var email_user=$("#email_user").val();
        if(email_user=="")
        {
          alert("Enter email ");
          return;
        }

      
        

 var phone_user=$("#phone_user").val();
       

 var market_zone=$("#market_zone").val();
        

         var selectClass=$("#selectClass").val();
        if(selectClass=="")
        {
          alert("Enter selectClass ");
          return;
        }
         var selectPackage=$("#selectPackage").val();

        if(selectPackage=="")
        {
          alert("Enter select Package ");
          return;
        }
   


         var add='add';
      
      
             $.ajax({
          
                    type: "POST",
                    url: "ajaxOrder.php",
                    data: {comanyname:comName,industry:industry,address:address,city:city,zip_code:zip_code,state:state,country:country,url:url,email:email,phone:phone,fax:fax,first_name:first_name,last_name:last_name,email_user:email_user,phone_user:phone_user,market_zone:market_zone,selectClass:selectClass,selectPackage:selectPackage,add:add},
                    cache: false,
                    success: function(data) {
                     
                    $('#loading').html(data);
                     $('#comName').val("");
                    $('#address').val("");
                    $('#country').val("");
                    $('#city').val("");
                    $('#zip_code').val("");
                    $('#state').val("");
                    $('#country').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#fax').val("");
                    $('#first_name').val("");
                    $('#email_user').val("");
                    $('#phone_user').val("");
                    $('#market_zone').val("");
                    $('#last_name').val("");

                      
            }
             });
}
</script>