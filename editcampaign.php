<?php session_start(); 
include 'db_connect.php';
$id = $_GET['cid'];
if(isset($_POST['campaignname'])) {

$campaignname = $_POST['campaignname'];
//$campaigngoal = intval(preg_replace('/[^0-9]+/', '', $_POST['campaigngoal']), 10);

$campaigngoal = str_replace('$','',$_POST['campaigngoal']);
$campaigngoal = str_replace(',','',$campaigngoal);
$campaigngoal = round($campaigngoal);


$campaigntagline = $_POST['campaigntagline'];
$campaignmessage = $_POST['campaignmessage'];
$banner = $_POST['banner'];

$query = "UPDATE `tblcampaigns` SET `campaignsname`='" . mysql_real_escape_string($campaignname) . "',`campaigngoal`='" . $campaigngoal . "',`banner`='" . $banner . "', `campaigntagline`='" . mysql_real_escape_string($campaigntagline) . "', `campaignmessage`='" . mysql_real_escape_string($campaignmessage) . "' WHERE campaigns_id = '" . $id . "' ";
$result = mysql_query($query);
ob_flush();
//header('Location: dashboard.php'); exit();
if($_SESSION['login_username'] == 'admin') {
 header("location:admin-campaigns.php"); exit();
} else{ 
header("location:dashboard.php"); exit();
}
}


session_start();
include("header2.php");





$getquery = "SELECT * FROM `tblcampaigns` where `campaigns_id` = '$id'";

$qury = mysql_query($getquery);

while ($rows = mysql_fetch_assoc($qury)) {

if($rows["banner"] == 'banner-1') {
 $banner1 = 'checked="checked"';
} elseif($rows["banner"] == 'banner-2') {
 $banner2 = 'checked="checked"';
} else {
 $banner3 = 'checked="checked"';
}

    // print_r($rows);
    ?>  
<script src="js/ckeditor/ckeditor.js"></script>

    <div class="w-container">

        <form name="regform" id="myform" enctype="multipart/form-data" action="" method="POST">

            <div class="add_camp_form">



                <li>
                    <div class="item">
                        <span>1</span>
                        <div class="arrow"><div class="arrow-right"></div></div>
                    </div>
                    <div class="question"><label>Name your campaign*</label>
                        <div class="description">For example: Let's Finish Leveque! or Matthew's Campaign for Leveque.
                        </div>
                        <input type="text"  id="campaignname" name="campaignname" value="<?php echo $rows["campaignsname"]; ?>"/>
                    </div>
                </li>






                <li>
                    <div class="item">
                        <span>2</span>
                        <div class="arrow"><div class="arrow-right"></div></div>
                    </div>
                    <div class="question">
                        <label>What's your campaign goal?<label>
                                <div class="description">
                                    The average campaign raises $1,000 so we will combine your campaign with others to reach the amount needed to build a new home ($6,000).
                                </div>

                                <input type="text"  name="campaigngoal" value="<?php echo $rows["campaigngoal"]; ?>"
                                       </div>


                 </li>



<li>
                    <div class="item">
                        <span>3</span>
                        <div class="arrow"><div class="arrow-right"></div></div>
                    </div>
                    <div class="question"><label>Campaign Tagline*</label>
                        <input type="text"  id="campaigntagline" name="campaigntagline" value="<?php echo $rows["campaigntagline"]; ?>"/>
                    </div>
                </li>
                               <li>
                                    <div class="item">
                                        <span>4</span>
                                        <div class="arrow"><div class="arrow-right"></div></div>
                                    </div>
                                    <div class="question">
                                        <label>Your campaign message?</label>
                                        <div class="description">
                                            Tell your friends and family the reason you're starting a Leveque campaign. You can view an example &gt; <a target="_blank" href="http://bit.ly/1fm8LAk">http://bit.ly/1fm8LAk</a>
                                        </div>
                                        <textarea id="editor1" name="campaignmessage"> <?php echo $rows["campaignmessage"]; ?> </textarea>
										
										<script>

											// This call can be placed at any point after the
											// <textarea>, or inside a <head><script> in a
											// window.onload event handler.

											// Replace the <textarea id="editor"> with an CKEditor
											// instance, using default configurations.
											
											CKEDITOR.replace( 'editor1', {
													// Define the toolbar groups as it is a more accessible solution.
													toolbarGroups: [
														
													],
													// Remove the redundant buttons from toolbar groups defined above.
													removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar'
												} );


										</script>

                                    </div>
                                </li>


                                <li>
                                    <div class="item">
                                        <span>5</span>
                                        <div class="arrow"><div class="arrow-right"></div></div>
                                    </div>
                                    <div class="question">
                                        <label>Select Your Campign Banner (optional)</label>
                                        <div class="description">
                                        </div>
                                        <p><input <?php echo $banner1;?> style="width:10%" type="radio" name="banner" value="banner-1"><img width="300px" src="images/banner-1.jpg"></p>
										<p><input <?php echo $banner2;?> class="bannerradio" style="width:10%" type="radio" name="banner" value="banner-2"><img width="300px" src="images/banner-2.jpg"></p>
                                        <p><input <?php echo $banner3;?> class="bannerradio" style="width:10%" type="radio" name="banner" value="banner-3"><img width="300px" src="images/banner-3.jpg"></p>
                                        
                                    </div>
                                </li> 

                                

                                <li>
                                    <div class="question">
                                        <input type="submit" value="Submit" name="submit" >  
                                    </div>
                                </li> 

                                </div>

                                </form>

                                </div>

                                <?php
                            }
                            ?>
<?php include("footer.php"); ?>