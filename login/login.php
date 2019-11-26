



<?php
session_start();
unset($_SESSION["log"]);

include("connection/connect.php");
$fetch[0]="";
$fetch[1]="";
$SMS="";
$Email=isset($_POST["email"])?$_POST["email"]:"";
$Password=isset($_POST["password"])?$_POST["password"]:"";

$inset=$conn->query("select * from sign_up_table where email='$Email' && password='$Password'");
$fetch=mysqli_fetch_array($inset);

if (isset($_POST["login"])) 
{
  if($fetch[0]==$Email)
  {
     if($fetch[1]==$Password)
      {
        $_SESSION["log"]=1;
        echo "<script>location='../admin/index.php'</script>";
      } 
      else
      {
        $SMS="<b style='color:red;'>Your Password is incorrect</b>";
      }
  } 
  else
  {
    $SMS="<b style='color:red;'>Sorry !! Check Your Email and Password..</b>";
  }
  

}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login Panel</title>

    <script type="text/javascript">
      //This is the password show and hide
      function myFunction() {
      var x = document.getElementById("myInput");
      if (x.type === "password") 
      {
        x.type = "text";
      } 
      else 
      {
        x.type = "password";
      }
    }
    </script>

  </head>
  <body style="background-color: #ccc;">
      <form name="" method="post" action="" enctype="">
        <table class="table table-borderless col-lg-4 col-md-4 col-sm-4" style="background: #fff;  margin: auto; margin-top: 50px;">
            <thead class="bg-light">
              <tr style="border-bottom:1px solid #ccc; ">
                <th scope="col"><h3>Login</h3></th>
              </tr>

            </thead> 
            <tbody>

              <tr>
                <td>
                  <label>User Name</label>
                  <input type="email" name="email" value="" class="form-control" placeholder="" required="" autocomplete="off">
                </td>
              </tr>

              <tr>
                <td>
                  <label>User Password</label>
                <input type="password" name="password" value="" class="form-control" placeholder="" id="myInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
                  <input type="checkbox" onclick="myFunction()"> Show Password

                  <center><?php echo $SMS;  ?></center>
                </td>


              </tr>

              <tr>
                <td>
                <button type="submit" name="login" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </td>
              </tr>

              <!-- <tr>
                <td>
                  <label>Don't have an account? <a href="sign_up.php">Sign Up</a></label>
                </td>
              </tr> -->

            </tbody>
          </table>
      </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>