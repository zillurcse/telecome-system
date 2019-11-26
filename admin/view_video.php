<?php 

include("../database/connection.php");


$fetch_data[0]="";
$fetch_data[1]="";

$_SESSION["log"]="";
session_start();

if($_SESSION["log"]==1) 
{





if(isset($_GET["delete"]))
{
 $id=$_GET["delete"];

 $query=$db->query("DELETE FROM `orderinfo` WHERE `sl`='$id'");

 if ($query)
 {

   $message="<b style='color:green'>Data Delete Successfully</b>";
 } else {

   $message="<b style='color:red'>Data Delete Unsuccessfully</b>";
 }


}


?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="textEdit/css/style.css" />
<link rel="stylesheet" href="textEdit/redactor/redactor.css" />
<link rel="stylesheet" href="../css/loading/loading.css" />
<script type="text/javascript" src="textEdit/lib/jquery-1.9.0.min.js"></script>
<script src="textEdit/redactor/redactor.min.js"></script>
<script src="../js/bootstrap-filestyle.min.js"></script>
<script type="text/javascript" src="../js/loading/pace.min.js"></script>
<style>
	@font-face{
		font-family: myFirstFont;
		src: url(../css/fonts/glyphicons-halflings-regular.svg);	
	}
</style>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">
	$(document).ready(function() {
		$(":file").filestyle({buttonText: "Chose Image"});
	});
	$(document).ready(
		function()
		{
			$('#redactor').redactor();
		}
	);
	function confirm_click()
    	{
    		$confirm_click=confirm('Are You Confirm to Update');
    		if($confirm_click===true)
    		{
    			return true;
    		}
    		else
    		{
    			return false;
    		}
    	}

    	function confirm_delete()
    	{
    		$confirm_click=confirm('Are You Confirm to Delete');
    		if($confirm_click===true)
    		{
    			return true;
    		}
    		else
    		{
    			return false;
    		}
    	}
	</script>
	<script>
		function preview_image(e) {
			var file = e.files[0];
			var imagefile = file.type;		
			var type = ["image/jpeg","image/png","image/jpg"];
			if(imagefile==type[0] || imagefile==type[1] || imagefile==type[2]){
				var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(e.files[0]);
			}else{
				alert("Please select a vild image");
			}
            function imageIsLoaded(e) {
                $("#file").css('border-color','GREEN');
				$("#textt").text("Selected Image : ");
                $("#preview").attr('src',e.target.result);
				$("#preview").css('height','60px');
            }
		}
	</script>
</head>
<body>


<h1>View Registration </h1>



<div class="table-responsive">

   <table class="table table-hover table-bordered" style="max-width: 1200px; background-color: #fff; margin: auto; ">
      

        <tr align="center" >
        
          <td>SL</td>
          <td>Company Name</td>
          <td>Industry</td>
          <td>Address</td>
          <td>City</td>
          <td>Zip Code</td>
          <td>State</td>
          <td>Country</td>
          <td>URL</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Fax</td>

          <td>Name</td>

          <td>Email User</td>
          <td>Phone User</td>
          <td>Market Zone</td>
          <td>Class</td>
          <td>Selected Plan</td>

          <td>Delete</td>
        </tr>


        <?php
        $sl=1;
        $query=$db->query("SELECT orderinfo.*,`package`.`user_title`,`package_class`.`class_name`,`package_class`.`country_name` FROM `orderinfo` 
INNER JOIN `package` ON `package`.`id`=`orderinfo`.`ChoosenPackage`
INNER JOIN `package_class` ON `package_class`.`id`=`orderinfo`.`Select_Class`");
        while($fetch_data=$query->fetch_array())

        {
          ?>


          <tr align="center">
              <td><?php print $sl++;?></td>

          
            <td><?php print $fetch_data['Company_Name'];?></td>
            <td><?php print $fetch_data['Industry'];?></td>
            <td><?php print $fetch_data['Address'];?></td>
            <td><?php print $fetch_data['City'];?></td>
            <td><?php print $fetch_data['Zip_Code'];?></td>
            <td><?php print $fetch_data['State'];?></td>
            <td><?php print $fetch_data['Country'];?></td>
            <td><?php print $fetch_data['Url'];?></td>
            <td><?php print $fetch_data['Email'];?></td>
            <td><?php print $fetch_data['Phone'];?></td>
            <td><?php print $fetch_data['Fax'];?></td>
            <td><?php print $fetch_data['First_Name'].' '.$fetch_data['Last_Name'];?></td>
            <td><?php print $fetch_data['Email_user'];?></td>
            <td><?php print $fetch_data['Phone_user'];?></td>
            <td><?php print $fetch_data['Market_zone'];?></td>
            <td><?php print $fetch_data['country_name'];?></td>
                <td><?php print $fetch_data['user_title'];?></td>


            <td><a href="registration.php?delete=<?php print $fetch_data[0];?>" class="btn btn-danger btn-sm">Delete</a></td>
          </tr>

          <?php

        }

        ?>
      </table>
</div>

	 
    <script src="../js/bootstrap.min.js"></script>
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