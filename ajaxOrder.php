
<?php

require_once 'database/index.php';
 $insertmessage="";

// echo $db->con_message;

if (isset($_POST["add"])) {

$comanyname=$_POST["comanyname"];
$industry=$_POST["industry"];
$address=$_POST["address"];
$city=$_POST["city"];
$zip_code=$_POST["zip_code"];
$state=$_POST["state"];
$country=$_POST["country"];
$url=$_POST["url"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$fax=$_POST["fax"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email_user=$_POST["email_user"];
$phone_user=$_POST["phone_user"];
$market_zone=$_POST["market_zone"];

$selectClass=$_POST["selectClass"];
$selectPackage=$_POST["selectPackage"];



        $query=$db->query("INSERT INTO `orderinfo`(`Company_Name`,`Industry`,`Address`,`City`,`Zip_Code`,`State`,`Country`,`Url`,`Email`,`Phone`,`Fax`,`First_Name`,`Last_Name`,`Email_user`,`Phone_user`,`Market_zone`,`Select_Class`,`ChoosenPackage`) VALUES('$comanyname','$industry','$address','$city','$zip_code','$state','$country','$url','$email','$phone','$fax','$first_name','$last_name','$email_user','$phone_user','$market_zone','$selectClass','$selectPackage')");
       // print  $query;
        
        if ($query) {

        
            print  "Apply  Successfully";
        }
        else{
          print "Apply  Unsuccessfully";
        }

}




?>