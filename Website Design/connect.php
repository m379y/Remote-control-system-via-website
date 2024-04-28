<?php 

$vt_server="localhost";
$vt_user="root";
$vt_password="";
$vt_name="vehiclecontrol_system";


$connect=mysqli_connect($vt_server,$vt_user,$vt_password,$vt_name);

if(!$connect){

    die("Login to control system failed".mysqli_connect_error());

}





?>