
<?php
include("../database/index.php");

$_SESSION["log"]="";
session_start();


if($_SESSION["log"]==1) 
{

    $message="";

  $Email=isset($_POST["email"])?$_POST["email"]:"";
  $Password=isset($_POST["password"])?$_POST["password"]:"";
  $Confirm_password=isset($_POST["confirm_password"])?$_POST["confirm_password"]:"";

  if(isset($_POST["signUp"]))
  {

    $image="../login/user_picture/$Email.jpg";
    @move_uploaded_file($_FILES['file']['tmp_name'],$image);

    $inset=$db->query("INSERT INTO sign_up_table (`email`,`password`,`confirm_password`) values('$Email','$Password','$Confirm_password')");
      if($inset)
      {        
        $message="<b style='color:green;'>Data Save Successfull</b>";
        
      }
      else
      {
        $message="<b style='color:red;'>Data Save Unsuccessfull</b>";
      }
  }

?>


<center><?php print $message;?></center>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="Author" content="Developed : SBIT"/>
    <meta name="Developer" content="SBIT, sbit.com, sbit.com.bd Skill Based IT,Skill Based Information Technology, Feni Sbit"/>
    <meta name="Developed By" content="Figo Nath"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <title>Sign Up</title>

    <script type="text/javascript">
	      //This is the password show and hide
	      function myFunction() {
	      var x = document.getElementById("confirm_password");
	      if (x.type === "password") 
	      {
	        x.type = "text";
	      } 
	      else 
	      {
	        x.type = "password";
	      }
	    }


	    //This is the password and confirm password matching
		var check = function() {
		  if (document.getElementById('password').value ==
		    document.getElementById('confirm_password').value) {
		    document.getElementById('message').style.color = 'green';
		    document.getElementById('message').innerHTML = '<b>Matching</b>';
		  } else {
		    document.getElementById('message').style.color = 'red';
		    document.getElementById('message').innerHTML = '<b>Not Matching</b>';
		  }
		}



			function check_pass() {
		    if (document.getElementById('password').value ==
		            document.getElementById('confirm_password').value) {
		        document.getElementById('submit').disabled = false;
		    } else {
		        document.getElementById('submit').disabled = true;
		    }
		}
 

  
</script>


    
  </head>
  <body style="background-color: #ccc;">
      <form name="" method="post" action="" enctype="multipart/form-data">
        <table class="table table-borderless col-lg-4 col-md-4 col-sm-4" style="background: #fff; margin: auto; margin-top: 50px;">
            <thead class="bg-light" style="border-bottom: 1px solid #ccc;">
              <tr>
                <th scope="col"><h3>Sign Up</h3></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <label>Email</label>
                  <input type="email" name="email" value="" class="form-control" placeholder="">
                </td>
              </tr>

              <tr>
                <td>
                  <label>Password</label>
                <input type="password" name="password" value="" class="form-control" placeholder="" onkeyup='check();' onchange='check_pass();' id="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                </td>
              </tr>


              <tr>
                <td>
                  <label>Confirm Password</label>
                <input type="password" name="confirm_password" value="" class="form-control" placeholder=""  onkeyup='check();' id="confirm_password" onchange='check_pass();' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                  <input type="checkbox" onclick="myFunction()"> Show Password
                   <span style="margin-left: 180px;" id='message'></span>
                </td>
              </tr>

               <tr>
              	<td>
              		 <input type="file" name="file" id="profile-img">
                     <img src="" id="profile-img-tag" width="80px" height="80" />

              		  <button type="submit" name="signUp"  id="submit" disabled class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;</button>
              	</td>
              </tr>

              <tr>
                <td>
                  <label><a href="index.php">Go To Admin...</a></label>
                </td>
              </tr>
              <!-- ---------------this is the picture file search--------------- -->
              <script type="text/javascript">
                  function readURL(input) {
                      if (input.files && input.files[0]) {
                          var reader = new FileReader();
                          
                          reader.onload = function (e) {
                              $('#profile-img-tag').attr('src', e.target.result);
                          }
                          reader.readAsDataURL(input.files[0]);
                      }
                  }
                  $("#profile-img").change(function(){
                      readURL(this);
                  });
              </script>

            </tbody>
          </table>
      </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
  }
  else
  {
        print("<h1>Nothing Found!</h1>
      <h3>You Can Not Authorize to See This Page.<h3>

     <a href='../login/login.php'> Please Login</a>");
        
  }
?>