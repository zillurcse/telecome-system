<?php 
include("../database/index.php");

$_SESSION["log"]="";
session_start();

if($_SESSION["log"]==1) 
{



$message="";

@$text=$_POST["text"];

  if(isset($_POST["addbtn"]))
 {

if (!empty($text)) 
{
    

   $query=$db->query("INSERT INTO `callcenterabout` (`id`,`callcenterabout`) VALUES('1','$text')");

   if ($query)
   {
     
             $message="<b style='color:green'>Data Save Successfully</b>";
   } else {
     
             $message="<b style='color:red'>Data Save Unsuccessfully</b>";
   }
   
   } else{

$message="<b style='color:red'>Sorry !! Text Field is Empty...</b>";
}

}



if(isset($_POST["edit"]))
 {
   $text=$_POST["text"];


   $query=$db->query("REPLACE INTO `callcenterabout` (`id`,`callcenterabout`) VALUES('1','$text')");

   if ($query)
   {
     $message="<b style='color:green'>Edit Successfully</b>";
   } else {
     $message="<b style='color:red'>Edit Unsuccessfully</b>";
   }
   

}

if(isset($_POST["delate"]))
 {

   $query=$db->query("DELETE FROM `callcenterabout` WHERE id='1'");

   if ($query)
   {
     $message="<b style='color:green'>Delete Successfully</b>";
   } else {
     $message="<b style='color:red'>Delete Unsuccessfully</b>";
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
    
      <script src='tinymce/tinymce.min.js'></script>

  <script type="text/javascript">
    tinymce.init({
    selector: '#myTextarea'
});
  </script>


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
                            <a href="../login/index.php">
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
                                <h4 class="title text-uppercase">Call Center About</h4>
                            </div>
 <?php
                                     $sql=$db->query("select * from callcenterabout");
                                      $fetch_data=$sql->fetch_array();
                                    ?>
                            <div class="content">
                                <form>

                                   

                                   <div class="row">

                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Details</label>
                                                <textarea id="myTextarea" rows="10" class="form-control" placeholder="Add Details" value="" name="text"><?php print $fetch_data[1]; ?></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>


                              
                                            
       

                                    <button type="submit" class="btn btn-success btn-fill" name="addbtn" >Add </button>
                                    <button type="submit" class="btn btn-primary btn-fill" name="edit" >Edit </button>
                                     <button type="submit" class="btn btn-danger btn-fill" name="delate" >Delete </button>
                                    <button type="submit" class="btn btn-info btn-fill" name="" >Cancel </button>

                                   <center><h5><?php echo $message; ?></h5></center>
                                      

                                    <div class="clearfix"></div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

   




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