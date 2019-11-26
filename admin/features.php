<?php 
include("../database/index.php");
  
  $fetch_data[0]="";
  $fetch_data[1]="";
  $fetch_data[2]="";
  $fetch_data[3]="";
  $fetch_data[4]="";
  $fetch_data[5]="";


$_SESSION["log"]="";
session_start();

if($_SESSION["log"]==1) 
{
    $message="";
   @$id=$_POST["id"];
   @$fertures=$_POST["fertures"];   
   @$costper=$_POST["costper"];
   @$pro=$_POST["pro"];
   @$guru=$_POST["guru"];
   @$business=$_POST["business"];



if(isset($_POST["addbtn"]))
 {

   

    if (!empty($id) && !empty($fertures)) 
    {
        
              $query=$db->query("INSERT INTO`fertures`(`id`,`fertures`,`costper`,`pro`,`guru`,`business`) values('$id','$fertures','$costper','$pro','$guru','$business')");

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

   

if (!empty($id) && !empty($fertures)) 
{
    
           $query=$db->query("REPLACE INTO`fertures`(`id`,`fertures`,`costper`,`pro`,`guru`,`business`) values('$id','$fertures','$costper','$pro','$guru','$business')");

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
   $query=$db->query("SELECT * FROM `fertures` WHERE id='$id'");
   $fetch_data=$query->fetch_array();

   
   }







if(isset($_GET["delete"]))
{
 $id=$_GET["delete"];
   
    $query=$db->query("delete from fertures where id='$id'");

      if ($query)
      {
       
               $message="<b style='color:green'>Data Delete Successfully</b>";
      } else {
       
               $message="<b style='color:red'>Data Delete Unsuccessfully</b>";
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
  <meta name="Author" content="Developed : SBIT"/>
    <meta name="Developer" content="SBIT, sbit.com, sbit.com.bd Skill Based IT,Skill Based Information Technology, Feni Sbit"/>
    <meta name="Developed By" content="Figo Nath"/>
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
                        <span class="sr-only">Features</span>
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
                    </ul>
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
                                <h4 class="title text-uppercase">Features</h4>
                            </div>

                            <div class="content">
                                <form>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Id</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder=" " value="<?php echo $fetch_data[0] ?>" name="id">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Features</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder=" " value="<?php echo $fetch_data[1] ?>" name="fertures">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Cost Per Minute (USD)</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="" value="<?php echo $fetch_data[2] ?>" name="costper">
                                            </div>
                                        </div>
                                    </div>


                                     <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Pro</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="" value="<?php echo $fetch_data[3] ?>" name="pro">
                                            </div>
                                        </div>
                                    </div>
                                    


                                     <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Guru</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="" value="<?php echo $fetch_data[4] ?>" name="guru">
                                            </div>
                                        </div>
                                    </div>



                                     <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Business</label>
                                                <input style="border: 1px solid #b7b6b6;" type="text" class="form-control" placeholder="" value="<?php echo $fetch_data[5] ?>" name="business">
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
                <td>Id</td>
                <td>Features</td>
                <td>Cost Per Minute</td>
                <td>Pro</td>
                <td>Guru</td>
                <td>Business</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>


<?php
  $query=$db->query("select * from fertures");
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
                <td><a href="features.php?edits=<?php print $fetch_data[0];?>" class="btn btn-success btn-sm">Edit</a></td>
                <td><a href="features.php?delete=<?php print $fetch_data[0];?>" class="btn btn-danger btn-sm">Delete</a></td>
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
                message: "Mr. <b>cnsdkjfjdsl</b>Add New portfolio Project."

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