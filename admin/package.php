<?php 
include("../database/index.php");
$fetch_data[0]="";
$fetch_data[1]="";
$fetch_data[2]="";
$fetch_data[3]="";
$fetch_data[4]="";
$fetch_data[5]="";
$fetch_data[6]="";
$fetch_data[7]="";
$fetch_data[8]="";
$fetch_data[9]="";
$fetch_data[10]="";

$_SESSION["log"]="";
session_start();

if($_SESSION["log"]==1) 
{

 
$message="";
   @$id=$_POST["id"];
   @$type=$_POST["type"];
   @$user_title=$_POST["user_title"];
   @$price=$_POST["price"];
   @$setup_fee=$_POST["setup_fee"];
   @$extensions=$_POST["extensions"];
   @$channels=$_POST["channels"];
   @$recording=$_POST["recording"];
   @$ivr=$_POST["ivr"];
   @$support=$_POST["support"];
   @$center=$_POST["center"];

  if(isset($_POST["addbtn"]))
 {

   

if (!empty($id)) 
{
    
           $query=$db->query("INSERT INTO`package`(`id`,`type`,`user_title`,`price`,`setup_fee`,`extensions`,`channels`,`recording`,`ivr`,`support`,`call_center`) values('$id','$type','$user_title','$price','$setup_fee','$extensions','$channels','$recording','$ivr','$support','$center')");

           if ($query)
           {
             
                     $message="<b style='color:green'>Data Save Successfully</b>";
           } else {
             
                     $message="<b style='color:red'>Data Save Unsuccessfully</b>";
           }
   
   } 
   else
   {

$message="<b style='color:red'>Sorry !! Text Field is Empty...</b>";
}

}








if(isset($_POST["edit"]))
 {

   

if (!empty($id)) 
{
    
           $query=$db->query("REPLACE INTO`package`(`id`,`type`,`user_title`,`price`,`setup_fee`,`extensions`,`channels`,`recording`,`ivr`,`support`,`call_center`) values('$id','$type','$user_title','$price','$setup_fee','$extensions','$channels','$recording','$ivr','$support','$center')");

           if ($query)
           {
             
                     $message="<b style='color:green'>Data Edit Successfully</b>";
           } else {
             
                     $message="<b style='color:red'>Data Edit Unsuccessfully</b>";
           }
   
   } 
   else
   {

    $message="<b style='color:red'>Sorry !! Text Field is Empty...</b>";
    }

}




if (isset($_GET["edits"])) {
   $id=$_GET["edits"];
   $query=$db->query("SELECT * FROM `package` WHERE id='$id'");
   $fetch_data=$query->fetch_array();

   
   }











if(isset($_GET["delete"]))
{
 $id=$_GET["delete"];
   
    $query=$db->query("delete from package where id='$id'");

    if($query)
    {
       $message="<b style='color:green'>Delete Successfully!</b>";
    }
    else
    {
        $message="<b style='color:green'>Delete Unsuccessfully!</b>!";
    }


}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    
    <!-- favicon link -->
    <link rel="icon" href="../img/faveicon.gif" type="image/gif" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
<form method="post" enctype="multipart/form-data">
<div class="wrapper">
       <?php

        include("LeftMenu.php");
     ?>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">About Us</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                       
                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Create Acount
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="sign_up.php">Create User</a></li>
                                <li><a href="signup_list.php">User View</a></li>
                              </ul>
                        </li>


                        <li>
                            <a href="../login/login.php">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                </div>
            </div>
        </nav>

<!-- Main work -->


<div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8" style="width: 100%;">
                        <div class="card">

                            <div class="header">
                                <h4 class="title text-uppercase">ADD Package</h4>
                            </div>

                            <div class="content">
                                <form>

                                   

                                   <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Id</label>
                                                <input style="border: 1px solid #b7b6b6;" type="number" class="form-control" placeholder="Add Id" value="<?php echo $fetch_data[0] ?>" name="id">
                                            </div>
                                        </div>

                                             <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select style="border: 1px solid #b7b6b6;" class="form-control" name="type">
                                              <option>User</option><option>Crm</option></select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>User Titel</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="Add User Titel" value="<?php echo $fetch_data[2] ?>" name="user_title">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input style="border: 1px solid #b7b6b6;" type="number" class="form-control" placeholder="Add Price" value="<?php echo $fetch_data[3] ?>" name="price">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Setup Fee</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="Add Setup Fee" value="<?php echo $fetch_data[4] ?>" name="setup_fee">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No. of Extensions</label>
                                             

                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="Add Setup Fee" value="<?php echo $fetch_data[5] ?>" name="extensions">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No. of Channels</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="Add Setup Fee" value="<?php echo $fetch_data[6] ?>" name="channels">

                                                
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Recording</label>
                                                  <div>
                                                    <input type="radio" id="" name="recording" value="Yes"
                                                      <?php 
                                                        if($fetch_data[7]=="Yes")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php 
                                                      }
                                                        ?>
                                                    >
                                                    Yes
                                                  </div>

                                                  <div>
                                                    <input type="radio" id="" name="recording" value="No"  <?php 
                                                        if($fetch_data[7]=="No")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php
                                                         }
                                                        ?>
                                                    >
                                                    No
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>IVR</label>
                                                 <div>
                                                    <input type="radio" id="" name="ivr" value="Yes"  
                                                     <?php 
                                                        if($fetch_data[8]=="Yes")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php 
                                                      }
                                                        ?>
                                                    >
                                                    
                                                    Yes
                                                  </div>

                                                  <div>
                                                    <input type="radio" id="" name="ivr" value="No"
                                                     <?php 
                                                        if($fetch_data[8]=="No")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php }
                                                        ?>

                                                    >
                                                    No
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Full Support</label>
                                                 <div>
                                                    <input type="radio" id="" name="support" value="Yes"

                                                     <?php 
                                                        if($fetch_data[9]=="Yes")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php 
                                                      }
                                                        ?>
                                                    >

                                                    Yes
                                                  </div>

                                                  <div>
                                                    <input type="radio" id="" name="support" value="No"

                                                     <?php 
                                                        if($fetch_data[9]=="No")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php 
                                                      }
                                                        ?>

                                                    >
                                                    No
                                                  </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Call Center</label>
                                                 <div>
                                                    <input type="radio" id="" name="center" value="Yes"

                                                     <?php 
                                                        if($fetch_data[10]=="Yes")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php }
                                                        ?>
                                                    >

                                                    Yes
                                                  </div>

                                                  <div>
                                                    <input type="radio" id="" name="center" value="No"

                                                     <?php 
                                                        if($fetch_data[10]=="No")
                                                        {
                                                      ?>
                                                      checked="checked"
                                                        <?php 
                                                      }
                                                        ?>

                                                    >
                                                    No
                                                  </div>
                                            </div>
                                        </div>
                                    </div>


                              
                                  <button type="submit" class="btn btn-success btn-fill" name="addbtn" >Add </button>
                                    <button type="submit" class="btn btn-primary btn-fill" name="edit" >Edit </button>
                                    
                                    <button type="submit" class="btn btn-info btn-fill" name="view" >View </button>
                                    <button type="submit" class="btn btn-danger btn-fill" name="" >Cancel </button>

                                    <center><h5><?php echo $message; ?></h5></center>
                                      

                                    <div class="clearfix"></div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

   
<?php 
 if(isset($_POST["view"]))
 {
?>


        <table class="table table-hover table-bordered" style="max-width: 1200px; background-color: #fff; margin: auto; margin-top: -200px;">
            <tr align="center" class="bg-primary" style="font-family: Nosferatu; font-size: 35px;">
                
            </tr>

            <tr align="center" class="bg-info">
                <td>User Id</td>
                <td>Type</td>
                <td>User Titel</td>
                <td>Price</td>
                <td>Setup Fee</td>
                <td>No. of Extensions</td>
                <td>No. of Channels</td>
                <td>Recording</td>
                <td>IVR</td>
                <td>Full Support</td>
                <td>Call Center</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>


<?php
  $query=$db->query("select * from package");
  while($fetch_data=$query->fetch_array())

  {
?>


            <tr align="center">
                <td><?php print $fetch_data[0];?></td>
                <td><?php print $fetch_data[1];?></td>
                <td><?php print $fetch_data[2];?></td>
                <td><?php print $fetch_data[3];?></td>
                <td><?php print $fetch_data[4];?></td>
                <td><?php print $fetch_data[5];?></td>
                <td><?php print $fetch_data[6];?></td>
                <td><?php print $fetch_data[7];?></td>
                <td><?php print $fetch_data[8];?></td>
                <td><?php print $fetch_data[9];?></td>
                <td><?php print $fetch_data[10];?></td>
                <td><a href="package.php?edits=<?php print $fetch_data[0];?>" class="btn btn-success btn-sm">Edit</a></td>
                <td><a href="package.php?delete=<?php print $fetch_data[0];?>" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>

<?php

   }

?>
        </table>

<?php

}

?>



</div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-left">
                   Developed By: <a href="https://sbit.com.bd"><b style="color:#18bc9c;"> SKILL BASED INFORMATION TECHNOLOGY</b></a>
                </p>
                 <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="../index.php"><b style="color:#18bc9c;">Omega Telecom</b></a>, All Rights Reserved
                </p>
            </div>
        </footer>


    </div>
</div>

</form>
</body>

        <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-pen',
                message: "Mr. <b>User</b>Add New portfolio Project."

            },{
                type: 'warning',
                timer: 1000
            });

        });
    </script>

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