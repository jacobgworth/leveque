<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
/*$username="mothe_rads";
$password="";
$database="newstory_db";
$host="localhost";
*/
$username="envee";
$password=",h_AMI.-~c)2";
$database="moh";
$host="107.180.31.45";


mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
?>
