
<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
  }

include("dbconnection/DBconnection.php");
include("model/member.php");
$member = new members();
$getMember = $member->getMemberById($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Member::Add</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, member-scalable=no" />

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
                    <div class="container">

                        <div class="row">
                            <div class="">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><h3 class="panel-title">Member Registration</h3></div>
                                    <div class="panel-body">
                    <form class="form-horizontal" action="controller/MemberController.php" role="form" method="post">
                                            <?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?>
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="name" value="<?php echo $getMember['name']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label" for="example-email">E-Mail</label>
                                                <div class="">
                                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="" value="<?php echo $getMember['email'];  ?>" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class=" control-label">Address</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="address" value="<?php echo $getMember['address'];?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class=" control-label">Phone</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="phone" value="<?php echo $getMember['phone'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class=" control-label">Designation</label>
                                                <div class="">
                                                    <input type="text" class="form-control" name="designation" value="<?php echo $getMember['designation'];?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class=" control-label">Status</label>
                                                <div class="">
                                                    <select class="form-control" name="status" required>
                                   <option value="">Selected Status</option>>                     
                                <option value="active" <?php if($getMember['status']=="Active") echo "selected"; ?>   >Active</option>
                                <option value="inactive" <?php if($getMember['status']=="Inactive") echo "selected"; ?>   >Inactive</option>
                                  
                                                </select>
                                                </div>
                                            </div>
                                  <input type="hidden" name="action" value="update_member">
                                  <input type="hidden" name="id" value="<?php echo $getMember['id']; ?>">
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