

<?php

require_once 'database/index.php';


 $insertmessage="";



if (isset($_POST["add"])) {
$comanyname=$_POST["nameOfCompany"];
$contact=$_POST["contactParson"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$subject=$_POST["subject"];
$message=$_POST["message"];



        $query=$db->query("INSERT INTO `sendsupport`(`Company_name`,`Contact`,`Email`,`Mobile`,`Subject`,`Message`) VALUES('$comanyname','$contact','$email','$mobile','$subject','$message');");

        if ($query) {

        
            print "Message Send Successfully";
        }
        else{
          print "Message Send Unsuccessfully";
        }

}


?>