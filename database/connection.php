<?php
$db=mysqli_connect("localhost","root","","omega_telecome");

if($db->connect_errno>0)
{
  die("Db Not Connect".$db->connect_error);
}
?>