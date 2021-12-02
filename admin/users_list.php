 <?php
 session_start();
 if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
  header("Location:login.php");
  exit();
}
include("dbconnection/DBconnection.php");
include("model/users.php");
$user = new Users();
$getUsers = $user->getUsers();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>User::List</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</div>

   <div class="content">
      <div><?php if(isset($_SESSION['message'])) echo $_SESSION['message'];?></div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">List of users</h3>
          </div>
          <table id="data" class="table table-striped" style="width:100%">
                  <thead>

                    <tr>
                      <th>Name</th>
                      <th>E-Mail</th>
                      <th>Phone</th>
                      <th>User Type</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>


                  <tbody>
                    <?php foreach($getUsers as $key=>$user): ?>
                      <tr>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['user_type']; ?></td>
                        <td><?php echo $user['status']; ?></td>
                        <td><a href="update_user.php?id=<?= $user['id'];?>" class="btn btn-info btn-sm">Update</a>
                          <form  action="controller/UsersController.php" method="post" style="display: inline-block;">
                            <input type="hidden" name="action" value="delete_user">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
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

    <script type="text/javascript">
      $(document).ready(function() {
        $('data').DataTable();
      } );
    </script>

  </body>
  <?php unset($_SESSION['message']); ?>
  </html>