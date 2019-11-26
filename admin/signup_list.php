<?php 

include("../database/index.php");

$_SESSION["log"]="";
session_start();

if($_SESSION["log"]==1) 
{

$message="";

if(isset($_GET["delete"]))
{
 $email=$_GET["delete"];
   
    $query=$db->query("delete from sign_up_table where email='$email'");

    if($query)
    {
       $message="<b style='color:green'>Delate Successfully!</b>";
    }
    else
    {
        $message="<b style='color:green'>Delate Unsuccessfully!</b>!";
    }


}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Author" content="Developed : SBIT"/>
    <meta name="Developer" content="SBIT, sbit.com, sbit.com.bd Skill Based IT,Skill Based Information Technology, Feni Sbit"/>
    <meta name="Developed By" content="Figo Nath"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <table class="table">
  <thead class="thead-dark">
    <tr>
     
      <th scope="col">Email</th>
      <th scope="col">Passwprd</th>
      <th scope="col">Confirm Password</th>
      <th scope="col">Picture</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
    include("../database/index.php");

        $inset=$db->query("SELECT * FROM sign_up_table");
        while($fetcharry=$inset->fetch_array())
        {
     ?>

    <tr>
      
      <td><?php echo $fetcharry[0];?></td>
      <td><?php echo $fetcharry[1];?> </td>
      <td><?php echo $fetcharry[2];?></td>
      <td><img src="../login/user_picture/<?php echo $fetcharry[0];?>.jpg" class="img-Responsive" height="100" width="100"></td>
      
      <td><a href="signup_list.php?delete=<?php print $fetcharry[0];?>" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
    <?php
      }
    ?>
    <tr><td colspan="5"><center><h5><?php echo $message; ?></h5></center></td></tr>
  </tbody>
</table>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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