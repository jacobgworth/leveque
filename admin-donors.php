<?php 
//session_start();
 
  include("header.php");
  //include("header2.php");
  
 ?>
  <!-- Load jQuery and the validate plugin -->
    <!-- Load jQuery and the validate plugin -->
	<!--<script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/common.js"></script>-->
	
	<script src="js/jquery.validate.js"></script>
	<link rel="stylesheet" href="css/reveal.css">
	<script src="js/jquery-pack.js" type="text/javascript"></script>
	<script src="js/fileuploader.js" type="text/javascript"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.reveal.js" type="text/javascript"></script>
	<script src="js/jquery.imgareaselect.min.js" type="text/javascript"></script>
	<script src="js/ckeditor/ckeditor.js"></script>

 	</head>
	
	
	<body>
	<div class="subnav">
    <div class="w-container">
      <h2 class="subnav-title"><span class="subnav-back-text"></span><a href="#" class="subnav-back-text dashboardHeading">List of Donors</a>&nbsp;</h2><a href="create-campaign.php" class="button local-nav createCampaign">create new campaign</a>
    </div>
  </div>	
	<div style="overflow-x: scroll;" class="w-container">
<?php if($_SESSION['login_username']=='admin') { ?>		
<table cellpadding="10" style="overflow-y:scroll; height:10px;">
<tr>
	<th>S.No.</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Status</th>
	<th>Amount</th>
	<th>Payment Id</th>
	<th>Email</th>
	<th>Date</th>
	<th>Type</th>
	<th>Campaign Name</th>
	<th>Campaign Id</th>
	<th>Address</th>
	<th>Postcode</th>
	<th>City</th>
	<th>Country</th>
</tr>

<?php
$count = 0;
$query = "SELECT * FROM `campaign_donation` ORDER BY did DESC"; 
$result = mysql_query($query) or die(mysql_error());
while($donation = mysql_fetch_array($result)) {
$count = $count+1;
$campaignquery = mysql_query("SELECT campaignsname FROM tblcampaigns WHERE campaigns_id = ".$donation['cid']);
//echo "SELECT campaignsname FROM tblcampaigns WHERE campaigns_id = ".$donation['cid'];
$campname = mysql_fetch_array($campaignquery);

 echo '<tr>
	<td>'.$count.'.</td>
	<td>'.$donation['firstname'].'</td>
	<td>'.$donation['lastname'].'</td>
	<td>'.$donation['status'].'</td>
	<td>$'.$donation['amount'].'</td>
	<td>'.$donation['paymentId'].'</td>
	<td>'.$donation['email'].'</td>
	<td>'.$donation['date'].'</td>
	<td>'.$donation['type'].'</td>
	<td>'.$campname['campaignsname'].'</td>
	<td>'.$donation['cid'].'</td>
	<td>'.$donation['address'].'</td>
	<td>'.$donation['postcode'].'</td>
	<td>'.$donation['city'].'</td>
	<td>'.$donation['country'].'</td>
</tr>';
}	
?>




</table>
<?php } ?>
</div>
