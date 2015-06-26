<?php
require_once 'db_connect.php';

if($_GET['data']=='name'){
   $value=unique_name($_GET['name']);
}

if($_GET['data']=='email'){
   $value=unique_email($_GET['email']);
}

function unique_name($name=''){
	  $query="select count(name) from tblcampaigns where name='$name'";
	   $response=mysql_query($query);
	   $result=mysql_fetch_array($response);
	   if($result[0]>0){
		  echo 'false';
	   }
	   else{
		 echo 'true';
	   }

}	
function unique_email($email=''){
	  $query="select count(email) from tblcampaigns where email='$email'";
	   $response=mysql_query($query);
	   $result=mysql_fetch_array($response);
	   if($result[0]>0){
		  echo 'false';
	   }
	   else{
		 echo 'true';
	   }

}
?>
