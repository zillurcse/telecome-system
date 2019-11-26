




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
            <a href="service.php">Service</a> <span>/</span>
            <a href="resellers.php">resellers</a> <span>/</span>
             <img src="images/reseller/Resellericon.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>






<?php

 $sql=$db->query("SELECT *FROM `system`");
 $fetch_system=$sql->fetch_array();

?>




<div class="container">
  <div class="fullresellerbg">
    <div class="systemtext">
      <div class="row">
        <div class="col-md-7">
          <div class="systemtextleft">
            <h1>System</h1>
            <hr>

            <p><?php echo $fetch_system[1]; ?></p>
        
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="systemtextright">
            <img src="images/reseller/Resellerimg.png" alt="">
          </div>
        </div>
      </div>



<?php

$sql=$db->query("SELECT *FROM `markting`");
 $fetch_markting=$sql->fetch_array();



?>


      <div class="resellermarketing">
      <div class="marketingtext">
        <h1>Marketing and billing features:</h1>
        <hr>
        <p><?php echo $fetch_markting[1]; ?></p>
      </div>
    </div>
  </div>
</div>


  












<div class="container">
  <div class="signupTop">
      <div class="heading">
        <h1>Registration</h1>
        <hr>
      </div>
      <form action="" method="POST" class="fullformreseller">
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



            <div class="fordashedborder"></div>


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
                <input type="text" name="market_zone" id="market_zone"  placeholder="What zone do you market to?" autocomplete="off">
            </div>

        </div>


      <div class="col-md-12" id="message">
<span style="color: #fff;"></span>
</div>

   <div class="col-md-12 submitbtn">
    <center>
      <label> <button type="button" name="add" onclick="return InsertData()">Submit</button></label>
      <label id="loading" style="color: #fff; padding-left: 20px; font-size: 18px;"> </label>

      

    </center>
  </div>


      </form>



    </div>
  </div>






<div class="container">
  <div class="aboutusvideo">
    <iframe width="100%" height="500" src="https://www.youtube.com/embed/JSH8Kmd0zio" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <!-- <img src="images/about/aboutusvideo.png" alt=""> -->
  </div>
</div>





<?php

include 'footer.php';

?>

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
      

         var add='add';
      
      
             $.ajax({
          
                    type: "POST",
                    url: "ajaxAddResellers.php",
                    data: {comanyname:comName,industry:industry,address:address,city:city,zip_code:zip_code,state:state,country:country,url:url,email:email,phone:phone,fax:fax,first_name:first_name,last_name:last_name,email_user:email_user,phone_user:phone_user,market_zone:market_zone,add:add},
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


