<?php
include 'db_connect.php';
$id = $_GET['id'];

$name = $_POST['name'];
$campaignname = $_POST['campaignname'];
//$birthdate = $_POST['birthdate'];
$birthmonth = $_POST['birthmonth'];
$birthday = $_POST['birthday'];
//$campaigngoal = $_POST['campaigngoal'];

$campaigngoal = str_replace('$','',$_POST['campaigngoal']);
$campaigngoal = str_replace(',','',$campaigngoal);
$campaigngoal = round($campaigngoal);



$email = $_POST['email'];
$phone = $_POST['phone'];
$logo = $_POST['file'];
$campaignmessage = $_POST['campaignmessage'];

$filename = $_FILES['file']['name'];
$fileloc = $_FILES['file']['tmp_name'];
$filestore = "images/" . $filename;


move_uploaded_file($fileloc, $filestore);

$query = "UPDATE `tblcampaigns` SET `campaignsname`='" . $campaignname . "',`campaigngoal`='" . $campaigngoal . "',`imageurl`='" . $filename . "' WHERE campaigns_id = '" . $id . "' ";
$result = mysql_query($query);
ob_flush();
header('Location: dashboard.php');exit();