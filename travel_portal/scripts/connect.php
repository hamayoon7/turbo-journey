<?php
$db_username = 'root';
$db_password = '';
$db_name = 'travel_portal';
$db_host = 'localhost';				
//connect to MySql						
$con = mysqli_connect("$db_host", "$db_username", "$db_password")or die("cannot connect"); 
mysqli_select_db($con,"$db_name")or die("cannot select DB");
