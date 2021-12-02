
<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
}

include("dbconnection/DBconnection.php");
include("model/donor.php");
$donor = new donors();
$getdonor = $donor->getDonorById($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Donor::Add</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, donor-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body class="">

    <div class="sidebar">
  <a class="active" href="index.php">Dashboard</a>
  <a href="#news">Blood Request</a>
  <a href="#contact">Doctor Request</a>
  <a href="#about">Police Request</a>
  <a href="users_list.php">User List</a>
  <a href="member_list.php">Member List</a>
</div>
            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><h3 class="panel-title">Donor Update</h3></div>
                                <div class="panel-body">
                                    <form class="form-horizontal" action="controller/donorController.php" role="form" method="post">
                                        <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                                        <div class="form-group">
                                            <label class=" control-label">Name</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="name" value="<?php echo $getdonor['name']; ?>" required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label">Address</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="address" value="<?php echo $getdonor['address'];?>">
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class=" control-label" for="example-email">E-Mail</label>
                                            <div class="">
                                                <input type="email" id="example-email" name="email" class="form-control" placeholder="" value="<?php echo $getdonor['email'];  ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class=" control-label">Phone</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="phone" value="<?php echo $getdonor['phone'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Donation</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="donation" value="<?php echo $getdonor['donation'];?>">
                                            </div>
                                        </div>

                                        <input type="hidden" name="action" value="update_donor">
                                        <input type="hidden" name="id" value="<?php echo $getdonor['id']; ?>">
                                        <div class="form-group m-b-0">
                                            <div class="">
                                              <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                          </div>
                                      </div>

                                  </form>
                              </div> 
                          </div> 
                      </div> 
                  </div> 
              </div>
          </div> 
      </div>
  </div>
</body>
<?php unset($_SESSION['message']); ?>
</html>