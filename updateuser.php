<?php
session_start();
$logged_user_id = $_SESSION['logged_user_id']; 
 include 'db_connect.php';



        $name = $_POST['name'];
        $email = $_POST['email'];
		$phone = $_POST['phone'];
		//$birthmonth = $_POST['birthmonth'];
		//$birthday = $_POST['birthday'];
		/* $logo = $_POST['file'];
		
		
		
		$filename = $_FILES['file']['name'];
		$fileloc =$_FILES['file']['tmp_name'];
		$filestore = "images/".$filename;

		if($filename=='') {$filename=$_POST['old_dp']; } 
		

		move_uploaded_file($fileloc,$filestore);*/
		
		if( $_POST['pflfilename'] !='' ){
		$filename = $_POST['pflfilename'];
		}else{
		$filename='thumbnail.png';
		}
		
     $query = "UPDATE `users` SET `name`='" .$name. "',`email`='" .$email. "',`phone`='" .$phone. "',`imageurl`='".$filename."' WHERE user_id = '".$logged_user_id."' ";



 							


    $result = mysql_query($query);
    
    //echo "sucessfully Updated"
  // header('Location:dashboard.php');

   if($_SESSION['login_username'] == 'admin') {
 header("location:admin-campaigns.php"); exit();
} else {
header('Location:dashboard.php'); exit();
}
?>
