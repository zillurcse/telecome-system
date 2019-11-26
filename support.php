




<?php
require_once 'database/index.php';
include 'header.php';

?>



<script src='tinymce/tinymce.min.js'></script>

  <script type="text/javascript">
    tinymce.init({
    selector: '#myTextarea'
});
  </script>
 



<div class="pagination">
    <div class="row">
      <div class="pagi">
        <ul>
          <li>
            <a href="index.php">Home</a><span> /</span>/
            <a href="service.php">Service</a><span> /</span>/
             <a href="support.php">Support</a><span> /</span>/
            <img src="images/man.png" alt="">
          </li>
        </ul>
      </div>
    </div>
</div>


<?php

 $sql=$db->query("SELECT *FROM `support`");
 $fetch_support=$sql->fetch_array();


?>



<div class="container">
  <div class="supportarea">
    <div class="row">
      <div class="col-md-12">
        <h1>Support</h1>
        <hr>
          <p><?php echo $fetch_support[1]; ?></p>
          <img src="images/manimg.png" alt="">
      </div>
    </div>
  </div>
</div>






<div class="container">
  <div class="support">
      <form action="" class="fullform" method="POST">
        <div class="row">
          <div class="col-md-6" id="comanyname">
              <input type="text" name="comanyname" id="companyName" placeholder="Name Of Company" autocomplete="off">
          </div>

          <div class="col-md-6" id="comanyname">
              <input type="text" name="contact" id="contact" placeholder="Contact Person" autocomplete="off">
          </div>

          <div class="col-md-6" id="comanyname">
              <input type="text" name="email" id="email" placeholder="Email" required="" autocomplete="off">
          </div>
          

          <div class="col-md-6" id="comanyname">
              <input type="text" name="mobile" id="mobile" placeholder="Mobile" autocomplete="off">
          </div>

          <div class="col-md-12" id="comanyname">
              <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="off">
          </div>

           <div class="col-md-12" id="comanyname">
              <textarea name="message" id="message"  placeholder="Message" id="myTextarea" autocomplete="off" ></textarea>
              <div class="edit">
                <div class="editleft">
                
                </div>
                <div class="editright">
                  <img class="bigedit" src="images/uploadicon.png" alt="">
                  <img src="images/gallery.png" alt="">
                </div>
              </div>
          </div>


<div class="col-md-12" id="message">

<!-- <span style="color: #fff;"> <?php echo $insertmessage; ?></span> -->

  
</div>

    <div class="submitbtn">
    
  </div>

   <div class="col-md-12 submitbtn">

            <label> <button type="button" name="add" onclick="return InsertData()">Submit</button></label>
      <label id="loading" style="color: #fff; padding-left: 20px; font-size: 18px;"> </label>


              
          </div>


      </form>
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

        var nameOfCompany=$("#companyName").val();


        if (nameOfCompany== '') {
         
    $('#companyName').css("border-color", "red");
        }

      else {
          $('#companyName').css('border-color', '');
      }


        var contactParson=$("#contact").val();
         if(contactParson=="")
        {
          alert("Enter Contact Number");
          return;
        }

        var email=$("#email").val();
        if(email=="")
        {
          alert("Enter Your Email ");
          return;
        }

        var mobile='mobile';
       

         var subject='subject';
         if(subject=="")
        {
          alert("Enter Your Mobaile No.");
          return;
        }

        var message='message';
         if(message=="")
        {
          alert("Write Your Message");
          return;
        }

         var add='add';
      
      
             $.ajax({
          
                    type: "POST",
                    url: "support_ajax_add.php",
                    data: {nameOfCompany:nameOfCompany,contactParson:contactParson,email:email,mobile:mobile,subject:subject,message:message,add:add},
                    cache: false,
                    success: function(data) {
                     
                    $('#loading').html(data);


                     $('#companyName').val("");
                    $('#contact').val("");
                    $('#email').val("");
                    $('#mobile').val("");
                    $('#subject').val("");
                    $('#message').val("");

                    

                      
            }
             });
}
</script>
