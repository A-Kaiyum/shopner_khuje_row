<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
  }
include("dbconnection/DBconnection.php");
include("model/member.php");
include("model/donor.php");

$getMember = new members();
$getMember = $getMember->getMembers();
$getDonor = new donors();
$getDonors = $getDonor->getDonors();
$getDonation = $getDonor->getDonation();
 ?>

 <!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="sidebar">
  <a class="active" href="index.php">Dashboard</a>
  <a href="#news">Blood Request</a>
  <a href="#contact">Doctor Request</a>
  <a href="#about">Police Request</a>
  <a href="users_list.php">User List</a>
  <a href="member_list.php">Member List</a>
  <a href="donors_list.php">Donor List</a>

</div>

  <div class="content-page">
               
                <div class="content">
                    <div class="">

                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Members</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b>

                               

                                        <?= count($getMember);?>

                                    </b></h3>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Donors</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b>
                                            
                                            <?= count($getDonors);?>
                                                
                                            </b></h3>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Donation</h4>
                                    </div>
                                    <div class="panel-body">
                                    <h3>  

                                        <?= $getDonation?> TK

                                      </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        </div>


                      

                        </div> 


                    </div> 
                </div> 
</body>
</html>