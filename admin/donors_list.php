 <?php
 session_start();
 if(empty($_SESSION['user_id']) && $_SESSION['donor_type']==''){
  header("Location:login.php");
  exit();
}
include("dbconnection/DBconnection.php");
include("model/donor.php");
$donor = new donors();
$getdonors = $donor->getDonors();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Donor::List</title>
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
   <div class="row">
        <div><?php if(isset($_SESSION['message'])) echo $_SESSION['message'];?></div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">List of Donors</h3>
            </div>
              <div class="row">
                   <table id="data" class="table table-striped" style="width:100%">
                    <thead>

                      <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>E-Mail</th>
                        <th>Phone</th>
                        <th>Donation</th>
                        <th>Action</th>
                      </tr>
                    </thead>


                    <tbody>
                      <?php foreach($getdonors as $key=>$donor): ?>
                        <tr>
                          <td><?php echo $donor['id']; ?></td>
                          <td><?php echo $donor['name']; ?></td>
                          <td><?php echo $donor['address']; ?></td>
                          <td><?php echo $donor['email']; ?></td>
                          <td><?php echo $donor['phone']; ?></td>
                          <td><?php echo $donor['donation']; ?></td>
                          <td><a href="update_donor.php?id=<?= $donor['id'];?>" class="btn btn-info btn-sm">Update</a>
                            <form  action="controller/DonorController.php" method="post" style="display: inline-block;">
                              <input type="hidden" name="action" value="delete_donor">
                              <input type="hidden" name="id" value="<?php echo $donor['id']; ?>">
                              <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form> </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
</body>
<?php unset($_SESSION['message']); ?>
</html>